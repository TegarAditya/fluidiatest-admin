# Copy Node.js and Corepack from node:alpine
FROM node:20-alpine AS nodejs

RUN npm install -g corepack@latest

# Enable Corepack and prepare pnpm
RUN corepack enable 

RUN corepack prepare pnpm --activate

# Base image with FrankenPHP
FROM dunglas/frankenphp:php8.3-alpine AS base

# Install required PHP extensions
RUN install-php-extensions \
    ctype \
    curl \
    dom \
    exif \
    fileinfo \
    filter \
    gd \
    hash \
    intl \
    mbstring \
    opcache \
    openssl \
    pcntl \
    pcre \
    pdo \
    pdo_mysql \
    session \
    tokenizer \
    xml \
    zip \
    @composer 

# Copy Node.js and Corepack binaries
COPY --from=nodejs /usr/local/bin/node /usr/local/bin/
COPY --from=nodejs /usr/local/lib/node_modules /usr/local/lib/node_modules/
COPY --from=nodejs /usr/local/bin/corepack /usr/local/bin/corepack

# Set working directory
WORKDIR /app

# Copy application code
COPY . /app

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build frontend assets
RUN node /usr/local/lib/node_modules/corepack/dist/corepack.js pnpm install --frozen-lockfile
RUN node /usr/local/lib/node_modules/corepack/dist/corepack.js pnpm run build

# Run Laravel setup
RUN php artisan storage:link

# Run Laravel optimizer
RUN php artisan optimize
RUN php artisan filament:optimize

# Expose port
EXPOSE 8000

# Default command
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]
