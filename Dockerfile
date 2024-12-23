# Stage 1: Build frontend assets using oven/bun
FROM oven/bun:1 AS frontend-build

# Set working directory
WORKDIR /app

# Copy only the frontend-related files
COPY . /app

# Install dependencies and build assets
RUN bun install
RUN bun run build

# Stage 2: Final image with FrankenPHP
FROM dunglas/frankenphp:php8.3-alpine

# Install PHP extensions
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
    zip

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /app

# Copy application code to container
COPY . /app

# Copy built frontend assets from the first stage
COPY --from=frontend-build /app/public/build /app/public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Run Laravel setup
RUN php artisan storage:link

# Expose port
EXPOSE 8000

# Default command
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]