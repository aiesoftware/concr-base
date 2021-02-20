
Install dependencies:

```
docker-compose run composer install
```

Run tests:

```
docker-compose run tests
```

The `beberlei/assert` library requires the php-intl library to be installed from where composer is run. The official composer docker image does not have that extension, therefore this package must define its own `Dockerfile` that builds a PHP image, which does install the extension. 

To run any composer commands, we should do it inside that image. This is managed through `docker-compose.yml`.

