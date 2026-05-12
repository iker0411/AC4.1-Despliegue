FROM php:8.2-apache
RUN docker-php-ext-install mysqli
RUN useradd -ms /bin/bash imenpal2611
COPY . /var/www/html
RUN chown -R imenpal2611:imenpal2611 /var/www/html
USER imenpal2611
