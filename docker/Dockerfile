FROM php:7.4-apache
COPY ./ ./

# Install dependencies
RUN apt-get update && apt-get install -y \
        libicu-dev \
        libpq-dev \
        openssh-client \
    && docker-php-ext-install intl pdo_mysql bcmath \
    && a2enmod rewrite \
    && a2enmod headers

# Add local user
RUN useradd -m local
USER local
