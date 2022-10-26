FROM php:apache
WORKDIR /var/www/html
COPY /webdocker ./
EXPOSE 9090
RUN docker-php-ext-install mysqli
