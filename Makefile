install:
	composer install

lint:
	composer exec phpcs -v

start-db:
	sudo service postgresql start

start:
	php artisan serve --host 0.0.0.0
