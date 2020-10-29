FROM ubuntu:latest

RUN apt-get update && \
    apt-get install --no-install-recommends -y --allow-unauthenticated \
    apt-utils \
    ca-certificates \
    curl \
    iputils-ping \
    dos2unix \
    php7.4 \
    php-xdebug \
    php7.4-pgsql \
    php7.4-cli && \
    cd ~ && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

COPY . /app/

WORKDIR /app

RUN composer install --no-interaction

CMD ping localhost -t 1
