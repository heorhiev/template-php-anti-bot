#!/bin/bash

/docker/wait-for.sh "database:3306" -t30

echo "127.0.0.1	crm-backend.local"  >> /etc/hosts.conf
echo "127.0.0.1	crm-api.local" >> /etc/hosts.conf

service cron start

apache2-foreground