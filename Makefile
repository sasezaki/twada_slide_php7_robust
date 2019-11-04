.PHONY: cs phpstan psalm

all: cs phpstan psalm

cs:
	./vendor/bin/phpcs

phpstan:
	./vendor/bin/phpstan analyse --level=2 src public

psalm:
	./vendor/bin/psalm
