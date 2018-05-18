## About Laravel Blog

Membuat Aplikasi Penjualan menggunakan Framework Laravel dan  Infyom Laravel Generator

Cara menggunakan
- Download repository dan ekstrak atau clone repository
	```sh
	$ git clone git@github.com:dwijonarko/laravel-simplePOS.git
	```
- Masuk ke direktori aplikasi dan jalankan composer
	```sh
	$ cd laravel-simplePOS
	$ composer install
	```
- Setting .env dan key application
	```sh
	$ mv .env.example .env
	$ php artisan key:generate
	```
- Edit database name, database username dan database password

	> DB_DATABASE=your_db.

 	> DB_USERNAME=your_mysql_username.
 	
	> DB_PASSWORD=your_mysql_password.

- Migrate table
	```sh
	$ php artisan migrate
	```

- Buka browser di 127.0.0.1:8000
- Register new account
- Login