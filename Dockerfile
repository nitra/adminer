FROM ghcr.io/shyim/adminerevo:4.8.4

# Redis, MS SQL
USER root
RUN apk add --no-cache \
    php-8.3-redis \
    php-8.3-pdo_dblib
USER nonroot
