FROM webdevops/php-nginx:8.1-alpine

EXPOSE 9000

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir -p /var/www/redis-demo

WORKDIR /var/www/redis-demo

COPY --chown=1000:1000 . /var/www/redis-demo

COPY ./.deploy/dev/vhosts/*.* /opt/docker/etc/nginx/conf.d/

RUN composer install --no-interaction --optimize-autoloader --no-dev

RUN php artisan key:generate
RUN php artisan optimize
RUN chmod 777 ./storage -R

USER www-data
