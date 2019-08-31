.PHONY: cs phpstan

all: cs phpstan

cs:
	./vendor/bin/phpcs --standard=PSR2 src public

phpstan:
	./vendor/bin/phpstan analyse --level=2 src public

