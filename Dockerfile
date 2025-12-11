# Stage 1: Build PHP dependencies
FROM php:8.2-fpm AS php-base

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    zip \
    curl \
    npm \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        pdo_pgsql \
    && docker-php-ext-enable pdo_pgsql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets (Vite)
RUN npm install && npm run build

# Set permissions for storage & cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Run Laravel config cache and migrations during build (forces env usage)
RUN php artisan config:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache \
 && php artisan migrate --force

# Stage 2: Runtime image
FROM php:8.2-cli

WORKDIR /var/www/html

# Copy everything from build stage
COPY --from=php-base /var/www/html /var/www/html

# Expose Laravel port
EXPOSE 10000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
