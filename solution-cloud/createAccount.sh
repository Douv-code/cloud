#!/bin/bash

username=$1
password=$2
domain=$3

# check if 3 arguments are passed
if [ $# -ne 3 ]; then
  echo "Need 3 arguments username password domain"
  exit 1
fi

# check if user already exists
if cat /etc/passwd | grep $username | wc -l | grep -q '[1-9]' ; then
  echo "User already exists"
  exit 1
fi

# create user
useradd -m $username

# set password
echo "$username:$password" | sudo chpasswd

# create database
sudo bash ./createSite.sh $username $domain;

# create database
sudo bash ./createDataBase.sh $username $password;
