FROM wordpress:6.4.2

LABEL maintainer="880831ian@gmail.com"

COPY code .

WORKDIR /var/www/html