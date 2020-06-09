## Requirements:
    Apache 2.4
    php: ^7.1
    PostgreSqQL 9.2

## Packages:
    symfony/console
    illuminate/database
    illuminate/events

## Installation:
```shell
    composer install
```

## Execute:
```shell
    php yoyo migrate
    php yoyo load-data
```

## Routes:
1. / - welcome
2. /currencies - get list of currencies
3. /currencies/{id} - get currency by id

## Authentication:
Authorization:Bearer <token>
<token> - allocated in config.php