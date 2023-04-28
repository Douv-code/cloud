#!/bin/bash
username=$1
file_path="/home/$username" 

used_space=$(du -sh "$file_path" | cut -f1)
echo "Used space: $used_space"