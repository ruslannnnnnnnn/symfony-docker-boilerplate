#!/usr/bin/env bash
openssl req -subj '/CN=localhost' -x509 -newkey rsa:2048 -nodes -keyout ./certs/private.key -out ./certs/fullchain.crt -days 365
openssl dhparam -out ./certs/dhparam-2048.pem 2048
