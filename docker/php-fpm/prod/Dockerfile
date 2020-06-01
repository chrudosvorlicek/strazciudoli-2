FROM liteacz/php:7.4-fpm-build as build

WORKDIR /var/www/data
COPY . /var/www/data

RUN composer --version \
    && composer install \
        -o \
        --prefer-dist \
        --no-suggest \
        --no-dev \
        --no-scripts \
        --no-progress

# Build production image
FROM liteacz/php:7.4-fpm

# This is shared between dev, build and prod images
COPY ./docker/php-fpm/shared.sh /var/www/shared.sh

RUN echo "Installing shared dependencies" \
    && chmod +x /var/www/shared.sh \
    && /var/www/shared.sh

# This is unique for production image
RUN echo "Installing production specific dependencies"

COPY ./docker/php-fpm/scripts /var/www/custom-scripts
RUN chmod +x /var/www/custom-scripts/*

COPY --from=build --chown=www-data:www-data /var/www/data /var/www/data
