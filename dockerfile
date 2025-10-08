# Usa a imagem base oficial do PHP 8.2 FPM
FROM php:8.2-fpm

# Define o diretório de trabalho
WORKDIR /var/www/html

# Instala o Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl


RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql


COPY . .


RUN composer install --optimize-autoloader --no-scripts --no-interaction


RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]


    
