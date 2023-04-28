#!/bin/bash
username=$1;
password=$2;

sudo mysql << EOF
CREATE DATABASE $username;
CREATE USER '$username'@'localhost' IDENTIFIED BY '$password';
GRANT ALL PRIVILEGES ON $username.* TO '$username'@'localhost';
exit
EOF
