FROM dunglas/frankenphp:php8.5-bookworm

WORKDIR /app

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libsqlite3-dev \
    libpq-dev \
    && docker-php-ext-install \
        pdo_sqlite \
        pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy Laravel application
COPY . .

# Install production PHP dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Create required Laravel directories and set permissions
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Render's default web service port
ENV SERVER_NAME=:10000

EXPOSE 10000

# Run database migrations before starting Laravel
CMD ["sh", "-c", "php artisan migrate --force && exec frankenphp run --config /etc/frankenphp/Caddyfile --adapter caddyfile"]