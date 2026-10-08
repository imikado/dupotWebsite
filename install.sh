#!/bin/bash
docker run --rm --network host \
    --user "$(id -u):$(id -g)" \
    -e COMPOSER_HOME=/tmp/composer \
    -v "$PWD":/app -w /app \
    composer:2 install
