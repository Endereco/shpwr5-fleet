#!/bin/bash

echo "Start services"
chmod -R 777 /var/www/
chown -R www-data:www-data /var/www/
service apache2 start
a2enmod rewrite
service apache2 restart
service apache2 stop

#cd /var/www/html/shopware5

# php bin/console sw:plugin:deactivate EnderecoShopware5Client
# php bin/console sw:plugin:activate EnderecoShopware5Client

chown -R www-data:www-data /var/www/

cd /var/www/html
apachectl -D FOREGROUND


