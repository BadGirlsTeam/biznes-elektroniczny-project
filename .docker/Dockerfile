FROM prestashop/prestashop-git:latest


COPY .docker/wait-for-it.sh /tmp/
COPY .docker/docker_run_git.sh /tmp/
COPY .docker/000-default.conf /tmp/
COPY .docker/apache2.conf /tmp/

RUN groupmod -g 1000 www-data \
  && usermod -u 1000 -g 1000 www-data

COPY /PrestaShop /var/www/html


RUN mkdir -p /var/www/.composer
RUN chown -R www-data:www-data /var/www/.composer


CMD ["/tmp/docker_run_git.sh"]
