install:
	composer install
brain-games: #start game
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even: #start even number test
	./bin/brain-even
brain-calc:
	./bin/brain-calc