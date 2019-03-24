#!/usr/bin/env bash

service apache2 start
service mysql start
rm /var/www/example.com/public_html/index.html
echo "Services started"
tail -f /dev/null
