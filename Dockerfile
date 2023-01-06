FROM prestashop/prestashop

RUN rm -rf *

COPY src/ ./

RUN mkdir -p /var/www/adminPanel
RUN chown -R www-data:root /var/www/adminPanel
#RUN chown -R www-data:root ./

RUN a2enmod ssl
COPY ssl/apache-selfsigned.key /etc/ssl/private
COPY ssl/apache-selfsigned.crt /etc/ssl/certs
COPY ssl/127.0.0.1.conf /etc/apache2/sites-available
RUN a2ensite 127.0.0.1.conf

EXPOSE 80
EXPOSE 443

