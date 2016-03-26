all:
	@echo "make server"

server:
	@php artisan serve --host=0.0.0.0

watch:
	@npm run watch

db-refresh:
	@php artisan migrate:refresh
	@php artisan db:seed
