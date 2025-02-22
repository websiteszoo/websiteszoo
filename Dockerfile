FROM asia-east1-docker.pkg.dev/pin-yi-project/common/php:7.4-fpm-alpine

LABEL maintainer="880831ian@gmail.com"

RUN apk --update --no-cache add curl-dev bash

RUN docker-php-ext-install mysqli

COPY code .

WORKDIR /var/www/html