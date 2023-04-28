#!/bin/bash
username=$1;

# check if 3 arguments are passed
if [ $# -ne 1 ]; then
  echo "Need 3 arguments username password domain"
  exit 1
fi

if ls -d /home/$username/site2/  ; then
  echo "second site already created"
  exit 1
fi

sudo mkdir /home/$username/site2;
sudo cp -r /etc/skel /home/$username/site2;
path="/home/$username/site2";
domain="$username.com";
nginxName="$username-site2";
sed -e "s/USERNAME/$path/" -e "s/DOMAIN/$domain/" /etc/nginx/templateConf > /etc/nginx/sites-enabled/$nginxName;
