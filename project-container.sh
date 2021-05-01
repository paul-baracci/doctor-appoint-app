#!/bin/sh
docker run -p 88:80 -p 8822:22 --name doctor-app -d \
	--restart unless-stopped \
	-v /home/paulbaracci/www/doctor-appointment-app/laravel:/var/www/html \
	--network project_doctor_network \
	amoraresco/it-academy-project:latest \
