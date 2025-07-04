FROM nginx:1.21
WORKDIR /var/www
ADD . /var/www
COPY ./.docker/vhost.conf /etc/nginx/conf.d/default.conf
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
 && ln -sf /dev/stderr /var/log/nginx/error.log