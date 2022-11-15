#!/bin/bash
cd /var/www
env -i git fetch
env -i git pull >> private_html/test.txt
