.PHONY: cs phpstan

all: cs phpstan

cs:
	./vendor/bin/phpcs

phpstan:
	./vendor/bin/phpstan analyse --level=2 src public

