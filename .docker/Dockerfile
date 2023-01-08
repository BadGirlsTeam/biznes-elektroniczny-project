FROM prestashop/prestashop-git:latest

# To run files with the same group as your primary user
# ARG GROUP_ID
# ARG USER_ID

# RUN groupmod -g $GROUP_ID www-data \
#   && usermod -u $USER_ID -g $GROUP_ID www-data

COPY .docker/wait-for-it.sh /tmp/
COPY .docker/docker_run_git.sh /tmp/
COPY .docker/000-default.conf /tmp/
COPY .docker/apache2.conf /tmp/

RUN groupmod -g 1000 www-data \
  && usermod -u 1000 -g 1000 www-data

COPY /PrestaShop /var/www/html

# COPY ./wait-for-it.sh /tmp/
# COPY ./docker_run_git.sh /tmp/
# COPY ./000-default.conf /tmp/
# COPY ./apache2.conf /tmp/

# RUN mkdir -p /var/www/.npm
# RUN chown -R www-data:www-data /var/www/.npm
RUN mkdir -p /var/www/.composer
RUN chown -R www-data:www-data /var/www/.composer

# RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
# RUN apt install -y nodejs

# Install mailutils to make sendmail work
# RUN apt install -y \
    # apt-utils \
    # mailutils


CMD ["/tmp/docker_run_git.sh"]
