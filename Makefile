# makefile for working with docker containers

.PHONY: up down web-shell cleanup backup-db backup-web restore-db restore-web

up:
	docker-compose up --build

down:
	docker-compose down

web-shell:
	docker exec -it `(docker ps | grep web | awk '{print $1}')` bash

cleanup:
	docker image prune

backup-db:
	docker exec -it `(docker ps | grep mysql | awk '{print $1}')` /usr/bin/mysqldump  -u root --password=3dodPaTXF5 --ignore-table=mediawiki.l10n_cache --opt mediawiki > backup_`date "+%Y-%m-%dT%H_%M_%S"`

backup-web:
	echo "backup-web"

restore-db:
	echo "restore-db"

restore-web:
	echo "restore-web"

