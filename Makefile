install:
	composer install

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src public

start-db:
	sudo service postgresql start

start:
	php artisan serve --host 0.0.0.0
