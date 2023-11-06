<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
 
## Tentang Restful API dengan pattern

Ini adalah sebuah contoh implementasi service dan repository pattern pada Rest API laravel. Dimana service itu berisi business logic, dan repository berisi query logic (manage data).
Alur kerjanya adalah: 
- endpoint akan menerima request dan mengirimkan data request ke *controller*
- lalu *controller* mengirim data ke *service*
- *service* mengirim data ke *repository*
- lalu hasil respon dari *repository* diterima oleh *service*
- hasil respon dari *service* diterima oleh *controller*,
- dan hasil tersebut *controller* kirim responnya ke client.

## Requirement sistem

- Laravel 8.0, yang di install dan bisa running di komputer kamu. Guide install laravel ada disini (https://laravel.com/docs/8.x/installation)
- PHP 7 keatas
- Postgre SQL
- Local server untuk running database, Misalnya MAMP, Apache atau WAMP (XAMPP untuk Windows)

## Setup

- jalankan perintah 'composer install' untuk install requirement-requirement dari code di repo
- Edit .env dan buat nama database yang anda inginkan
- buat database baru sesuai nama yang anda set di file .env
- jalankan 'php artisan migrate:refresh' untuk membuat tabel-tabel yang diperlukan kedalam database
- jalankan 'php artisan serve' untuk menjalankan app
