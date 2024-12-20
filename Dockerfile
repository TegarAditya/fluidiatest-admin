# Use the FrankenPHP image
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

# Install Node.js and npm
RUN apk add --no-cache nodejs npm

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /app

# Copy application code to container
COPY . /app

# Install dependencies and build assets
RUN composer install --no-dev --optimize-autoloader

RUN npm install

RUN npm run build

RUN php artisan storage:link

# Expose port
EXPOSE 8000

# Default command
ENTRYPOINT ["php", "artisan", "octane:frankenphp"]