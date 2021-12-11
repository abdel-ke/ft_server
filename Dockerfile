FROM debian:buster

RUN apt-get update && apt-get install nginx -y
RUN apt-get install mariadb-server mariadb-client -y
RUN apt-get install php-fpm php-mysql -y
RUN apt-get install vim wget -y
RUN apt-get install -y php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cli php-fpm php-cgi php-mysql -y
RUN mkdir /content
COPY ./srcs/ /content
RUN cp /content/default /etc/nginx/sites-available/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz -P /content
RUN tar xzf /content/phpMyAdmin-4.9.0.1-english.tar.gz && \
mv /phpMyAdmin-4.9.0.1-english /phpmyadmin && \
mv /phpmyadmin /var/www/html/
#RUN rm /var/www/html/phpmyadmin/config.sample.inc.php
RUN cp /content/config.inc.php /var/www/html/phpmyadmin
RUN chmod 660 /var/www/html/phpmyadmin/config.inc.php
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
RUN service mysql start \
&& mysql -u root < "/content/createdb.sql" \
&& mysql -u root < "/content/localhost.sql"\
&& mysql -u root < "/content/dbuser.sql"
RUN wget https://wordpress.org/latest.tar.gz -P /
RUN tar xzf latest.tar.gz && mv wordpress /var/www/html/
# RUN rm /var/www/html/wordpress/wp-config-sample.php
RUN cp /content/wp-config.php /var/www/html/wordpress
RUN chown -R www-data:www-data /var/www/html/wordpress
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj '/CN=MA'
RUN openssl dhparam -out /etc/nginx/dhparam.pem 64
RUN cp /content/self-signed.conf /etc/nginx/snippets/
RUN cp /content/ssl-params.conf /etc/nginx/snippets/
RUN cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.bak
EXPOSE 80 443
CMD bash /content/start.sh