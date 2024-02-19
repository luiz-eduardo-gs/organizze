SAIL = $(shell [ -f sail ] && echo sail || echo vendor/bin/sail)

sail-install:
	docker run --rm \
		-u "$(shell id -u):$(shell id -g)" \
		-v "$(shell pwd):/var/www/html" \
		-w /var/www/html \
		laravelsail/php83-composer:latest \
		composer install --ignore-platform-reqs

up:
	$(SAIL) up -d

down:
	$(SAIL) down

bash:
	$(SAIL) bash

test:
	$(SAIL) test

migrate:
	$(SAIL) artisan migrate

npm-dev:
	$(SAIL) npm run dev

ide-helper-models:
	$(SAIL) artisan ide-helper:models --dir="app/Models" --dir="src/Core/Classification/Infrastructure/Model"

format:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix