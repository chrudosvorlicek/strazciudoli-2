FROM liteacz/php:7.4-fpm-dev

# This is shared between dev, build and prod images
COPY ./docker/php-fpm/shared.sh /var/www/shared.sh

RUN echo "Installing shared dependencies" \
    && chmod +x /var/www/shared.sh \
    && /var/www/shared.sh

# This is unique for production image
RUN echo "Installing dev specific dependencies" \
    && mkdir -p /var/www/custom-scripts
