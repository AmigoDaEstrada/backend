#!/bin/bash


if [ "$1" = "-c" ]
then
	php artisan  migrate:refresh	
	php artisan  db:seed
fi

php -S localhost:8000 -t public
