.PHONY: phar
phar:
	cd phar && php create.php && cd .. && php -S localhost:5252 ./phar-run/detector.phar

.PHONY: email
email:
	php -S localhost:5252 ./email/injection.php

.PHONY: mailhog
mailhog:
	MailHog

.PHONY: file
file:
	php -S localhost:5252 ./file/download.php
