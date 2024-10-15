## Установка из репозитория

Склонируйте репозиторий
```sh
git clone https://github.com/Dimakinsfator/laravel.loc.git
```
Перейдите в папку с проектом и установите composer-зависимости
```sh
cd laravel.loc
composer install
```

Скопируйте файл .env.example в .env
```sh
cp .env.example.env
```
Сгенерируйте ключ шифрования 
```sh
php artisan key:generate
```
Измените файл конфигурации .env
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Имя_БД
DB_USERNAME=Ваш_Логин
DB_PASSWORD=Ваш_пароль

SESSION DRIVER=file
```

## пустой проект создан командами
```sh
composer create-project laravel/laravel.
php artisan install: api
php artisan config:publish cors
php artisan storage:link
```
Please add the [Laravel\Sanctum\HasApiTokens] trait to your User model
