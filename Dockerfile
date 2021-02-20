FROM php:7.4-cli

RUN apt-get update -y \
  && apt-get install -y \
    zlib1g-dev libicu-dev g++ git zip unzip \
  && docker-php-ext-configure intl \
  && docker-php-ext-install intl

COPY --from=composer /usr/bin/composer /usr/bin/composer
