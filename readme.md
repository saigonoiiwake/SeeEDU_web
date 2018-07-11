# SeeEDU

## Goal
Platform for SeeEDU

## Framework
Laravel 5.5.40

## Requirement
- Composer
- PHP >= 7.0.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Run

#### Install Dependency
```shell
composer install
npm install
```

#### With Pusher for Messenger in .env
```shell
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=xxxxx
PUSHER_APP_KEY=xxxxx
PUSHER_APP_SECRET=xxxxx
PUSHER_APP_CLUSTER=xxxx

```

#### Do Migration
```shell
php artisan migrate
```

####Run Server
```shell
php artisan serve
```

## Document

[Laravel 5.5 Document](https://laravel.com/docs/5.5)
[Seeedu31]https://www.seeedu31.com/
