FROM nginx:1.27.5-alpine

RUN apk add --no-cache curl

COPY conf.d /etc/nginx/conf.d

WORKDIR /var/www/symfony
