env-prepare:
	cp -n .env.example .env

install:
	composer install
	npm ci

key:
	php artisan key:gen --ansi

prepare-db:
	php artisan migrate:fresh --seed

setup: env-prepare install key
	npm run build

lint:
	composer exec phpcs -v

start-db:
	sudo service postgresql start

start:
	php artisan serve --host 0.0.0.0

start-frontend:
	npm run dev
