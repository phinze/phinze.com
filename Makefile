JEKYLL_VERSION = 3.8

.PHONY: build
build: ## Run jekyll build
	@docker run --rm \
	  --volume="${PWD}:/srv/jekyll" \
    --volume="${PWD}/vendor/bundle:/usr/local/bundle" \
		-it jekyll/jekyll:$(JEKYLL_VERSION) \
	  jekyll build

.PHONY: serve
serve: ## Run jekyll serve
	@docker run --rm \
	  --volume="${PWD}:/srv/jekyll" \
    --volume="${PWD}/vendor/bundle:/usr/local/bundle" \
		-p 4000:4000 \
		-it jekyll/jekyll:$(JEKYLL_VERSION) \
	  jekyll serve

.PHONY: update
update: ## Run bundle update
	@docker run --rm \
	  --volume="${PWD}:/srv/jekyll" \
    --volume="${PWD}/vendor/bundle:/usr/local/bundle" \
		-it jekyll/jekyll:$(JEKYLL_VERSION) \
	  bundle update

.PHONY: help
.DEFAULT_GOAL := help
help: ## Print help message (default)
	@grep -h -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
