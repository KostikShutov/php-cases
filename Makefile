.PHONY: phar
phar:
	cd phar && php create.php && cd .. && php -S localhost:5252 ./phar-run/detector.phar
