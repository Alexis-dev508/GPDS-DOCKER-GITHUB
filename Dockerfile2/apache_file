#syntax=docker/dockerfile:1
FROM php:apache
#Instala Mysqli
RUN docker-php-ext-install mysqli

#Activar modulos de Apache
RUN a2enmod headers
RUN a2enmod rewrite

#Reiniciar apache
RUN /etc/init.d/apache2 restart

