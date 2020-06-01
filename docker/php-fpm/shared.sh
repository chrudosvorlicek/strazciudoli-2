#!/bin/sh

echo "Installing shared dependencies" \
    && apk add --no-cache dcron \
    && mkdir -m 0644 -p /var/log \
    && touch /var/log/cron.log
