.PHONY: cs

all: cs

cs:
	./vendor/bin/phpcs --standard=PSR1 src public

phpstan:
	./vendor/bin/phpstan analyse --level=1 src public