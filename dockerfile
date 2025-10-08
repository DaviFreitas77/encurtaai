
FROM php:8.2-fpm


WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


COPY composer.json composer.lock ./


RUN composer install --optimize-autoloader --no-scripts --no-interaction


COPY . .


RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache


EXPOSE 9000


CMD ["php-fpm"]
