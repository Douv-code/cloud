#!/bin/bash
username=$1;
new_password=$2;
# Change the password
echo "$username:$new_password" | chpasswd;
