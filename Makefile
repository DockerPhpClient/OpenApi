install: composer download

DOCKER_API_VERSION:=1.40

composer:
	@docker run -it -w /data -v ${PWD}:/data:delegated -v ~/.composer:/root/.composer:delegated --entrypoint composer --rm registry.gitlab.com/grahamcampbell/php:7.4-base update

download:
	@curl -o docker-openapi.yaml https://docs.docker.com/engine/api/v$(DOCKER_API_VERSION).yaml

jane:
	@docker run -it -w /data -v ${PWD}:/data:delegated -v ~/.composer:/root/.composer:delegated --entrypoint php --rm registry.gitlab.com/grahamcampbell/php:7.4-base vendor/bin/jane-openapi generate --config-file .jane-openapi

doc:
	@docker run --rm -v ${PWD}:/data phpdoc/phpdoc:3 run -d src -t v6.$(DOCKER_API_VERSION)/doc