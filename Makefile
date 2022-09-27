ifneq (,$(wildcard ./.env))
    include .env
    export
endif

.DEFAULT_GOAL := help

.PHONY: help
help:
	@echo "usage: make [target] ..."
	@echo ""
	@echo "targets:"
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'

.PHONY: setup
setup: ## Setup required environment
	@echo "creating .env file"
	@cp .env.example .env

.PHONY: run
run: ## Run service
	@docker compose up --build --remove-orphans

.PHONY: stop
stop: ## Stop service
	@docker stop onu
