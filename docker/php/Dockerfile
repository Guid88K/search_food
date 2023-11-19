# Використовуємо офіційне зображення PHP з Apache
FROM php:7.4-apache

# Встановлюємо необхідні розширення PHP та пакет libpq-dev
RUN apt-get update && \
    apt-get install -y libzip-dev zip libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql

# Встановлюємо Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Встановлюємо необхідні пакети для Laravel
RUN apt-get install -y libzip-dev zip && \
    docker-php-ext-install zip

# Копіюємо файли Laravel в контейнер
COPY . /var/www/html

# Встановлюємо права доступу
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage

# Встановлюємо залежності Laravel
RUN composer install

# Копіюємо конфігураційний файл .env
COPY .env.example .env

# Генеруємо ключ за допомогою Artisan
RUN php artisan key:generate

# Команда для виконання при старті контейнера
CMD php artisan serve --host=0.0.0.0 --port=9000
