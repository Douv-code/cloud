#!/bin/bash
for x in *; do
    backupFile= "backup${x}`date +%Y%m%d`.tar.gz"
    tar -czf $x/backups/$backupFile $x/site/backups
done