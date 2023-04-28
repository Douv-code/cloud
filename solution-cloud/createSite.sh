#!/bin/bash

username=$1
domain=$2

# generate nginx config
sed -e "s/USERNAME/$username/" -e "s/DOMAIN/$domain/" /etc/nginx/templateConf > /etc/nginx/sites-enabled/$username;
