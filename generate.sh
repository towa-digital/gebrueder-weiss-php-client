openapi-generator generate -g php -o . -i api-specification.yaml --package-name=towa/gbw-sdk -c additionalProps.json
rm -f .travis.yml git_push.sh openapitools.json .php_cs
