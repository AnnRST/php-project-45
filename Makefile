# Makefile

install: # установить зависимости
	composer install

brain-games: # start game
	./bin/brain-games

validate:
	composer validate