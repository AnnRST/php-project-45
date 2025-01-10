# Makefile

# установить зависимости
install:
	composer install

# start game
brain-games:
	./bin/brain-games

validate:
	composer validate

# проверка линтером
lint: 
	composer exec --verbose phpcs -- --standard=PSR12 src bin
