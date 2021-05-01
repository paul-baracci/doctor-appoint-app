#!/bin/sh
docker run -p 3306:3306 --name doctor-app-db -d \
 --restart unless-stopped \
 -v /home/paulbaracci/www/doctor-appointment-app/docker-containers/db:/var/lib/mysql \
 -e MYSQL_ROOT_PASSWORD=groot \
--network project_doctor_network \
  mariadb:latest \
