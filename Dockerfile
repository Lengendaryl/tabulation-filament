FROM php:8.4.21RC1-zts-trixie

RUN apt-get update && apt-get install -y \
    php8.4 \
    php8.4-curl \
    php8.4-fileinfo \
    php8.4-intl \
    php8.4-mbstring \
    php8.4-mysqli \
    php8.4-pdo-mysql \
    php8.4-sqlite3 \
    php8.4-xsl \
    php8.4-zip \
    php8.4-gd \
    php8.4-ftp

