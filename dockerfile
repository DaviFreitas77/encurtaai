
FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip gd

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


COPY composer.json composer.lock ./


RUN composer install --no-interaction --optimize-autoloader --no-scripts


COPY . .

RUN composer dump-autoload --optimize --no-scripts

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache


EXPOSE 8000

CMD php artisan key:generate && php artisan serve --host=0.0.0.0 --port=8000

