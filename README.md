# Web Kauppaa

A simple dummy application

# Installation

Steup venders

    php composer.phar install

Create environment

    cp .env.example .env

Generate key

    php artisan key:generate
    php artisan jwt:generate

Edit settings

    vim .env

Steup database

    touch database/database.sqlite
    php artisan migrate

Seed database

    php artisan db:seed

Seeded user

	user / 12345678
	financier / 12345678
	admin / 12345678

Frontend assets

    npm install
    ./node_modules/.bin/gulp --production

Backend assets

    npm install
    ./node_modules/.bin/bower install
