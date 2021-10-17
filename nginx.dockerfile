FROM nginx:1.10-alpine

COPY sourcefiles/default.conf /etc/nginx/conf.d/default.conf

# COPY public /var/www/public
WORKDIR /var/www
