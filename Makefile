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

# запиши, что б не забыть
dump-autoload:
	composer dump-autoload

# start game
brain-even:
	./bin/brain-even

# start game
brain-calc:
	./bin/brain-calc