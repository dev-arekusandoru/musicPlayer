#!/bin/bash
cd /var/www
echo "$PWD"
git fetch
git pull
echo "it worked"

