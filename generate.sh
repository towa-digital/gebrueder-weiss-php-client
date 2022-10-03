#!/bin/bash

npx @openapitools/openapi-generator-cli generate -t custom_template -g php -o  . -i api-specification.yaml --package-name=towa/gbw-sdk -c additionalProps.json
rm -f .travis.yml git_push.sh

# resetting unwanted files
git checkout -- .gitignore
git checkout -- composer.json
git checkout -- .php_cs