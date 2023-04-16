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
brain-calc: #start calc game
	./bin/brain-calc
brain-gcd: #start gcd game
	./bin/brain-gcd
brain-progression: #start progression game
	./bin/brain-progression
brain-prime:
	./bin/brain-prime