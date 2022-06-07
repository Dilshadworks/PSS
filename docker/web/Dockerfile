FROM php:8.0-apache

RUN apt-get update && apt-get install -y \
    		libfreetype6-dev \
    		libpng-dev \
    		libwebp-dev \
    		libjpeg62-turbo-dev \
    		libmcrypt-dev \
    		libzip-dev \
            zip \
    		git \
    && docker-php-ext-install \
    pdo_mysql \
    gd \
    zip \
    && a2enmod \
    rewrite

# Add the user UID:1000, GID:1000, home at /app
#RUN groupadd -r app -g 1000 && useradd -u 1000 -r -g app -m -d /app -s /sbin/nologin -c "App user" app && \
#    chmod 755 /var/www/html

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

#upload
RUN echo "file_uploads = On\n" \
         "memory_limit = 500M\n" \
         "upload_max_filesize = 500M\n" \
         "post_max_size = 500M\n" \
         "max_execution_time = 600\n" \
         > /usr/local/etc/php/conf.d/uploads.ini

# RUN composer update
# RUN php artisan optimize
# RUN php artisan migrate


USER app

WORKDIR /var/www/html

USER root

COPY default.conf /etc/apache2/sites-enabled/000-default.conf
COPY default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf

COPY envvars /etc/apache2/envvars

COPY ./ssl/poolservice.software.key /etc/apache2/ssl/poolservice.software.key
COPY ./ssl/poolservice.software.crt /etc/apache2/ssl/poolservice.software.crt
COPY ./ssl/poolservice.software.ca-bundle /etc/apache2/ssl/poolservice.software.ca-bundle
COPY ./ssl/poolservice.software.csr /etc/apache2/ssl/poolservice.software.csr

COPY ./ /var/www/html/


# Set environment variables for Apache so we know its user and group names
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data


RUN a2enmod rewrite

#Configure SSL On Apache2
RUN a2enmod headers
RUN a2enmod ssl
RUN a2enmod proxy
RUN a2enmod proxy_http
RUN service apache2 restart
# RUN a2ensite default-ssl.conf


CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

EXPOSE 80
EXPOSE 443
