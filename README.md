# Langkah-langkah menjalankan projek Laravel 11


Sebelum memmulai mengerjakan projek disarankan menggunakan **GitHub Dekstop** (aplikasi) untuk mempermudah pekerjaan.


## Table of contents

* [Cara Clone projek](#cara-clone-projek-dengan-benar)
  * [Konfigurasi file .env](#konfigurasi-file-env)
  * [Install Laravel dependencies](#install-laravel-dependencies)
  * [Migrate the tables](#migrate-the-tables)
  * [Compile the front-end](#compile-the-front-end)
  * [Launch the Laravel backend](#launch-the-Laravel-backend)        
* [Credits](#credits)

## Cara Clone projek dengan benar😅

Buka projek di GitHub (browser) lalu klik pada tombol hijau bertuliskan **Code**, jika sudah menginstall **GitHub Dekstop** maka akan muncul pilihan **Open with GitHub Dekstop** klik dan pilih lokasi penyimpanan, setelah itu buka di VScode dan ikuti langkanh selanjutnya.

### Konfigurasi file .env

Pastikan konfigurasi database pada file .env seperti ``DB_DATABASE`` database dan ``DB_USERNAME``. 

(opsional) untuk memudahkan koneksi database saja
jika ingin lebih mudah dapat mengganti ``DB_CONNECTION=mysql`` menjadi ``DB_CONNECTION=sqlite`` dan komentari/hapus konfigurasi dibawahnya sampai ``DB_PASSWORD``, buat file baru dengan nama ``database.sqlite`` di folde database.
**NB:** Jika menggunakan ``sqlite`` dapat mengunduh tools [TablePlus](https://tableplus.com/) untuk mengakses database.

### Install Laravel dependencies

Di dalam folder projek,  buka terminal dan jalankan perintah:

``composer install`` 
dan 
``composer update``.

Tunggu hingga proses instalasi selesai.

### Migrate the tables

Untuk migrasi databse dapat menjalankan command berikut

``php artisan migrate:fresh --seed``

### Compile the front-end

Agar front-end dapat ditampilkan, harus menginstal NPM dependensi dengan menjalankan perintah: 

``npm install``

Setelah terinstall, setiap ingin menjalankan projek, ketik ``npm run dev`` di terminal untuk menjalankan server.

### Launch the Laravel backend

Seteleh semua itu baru jalankan perintah berikut:

``php artisan serve``


## Credits

- [Nucleo](https://nucleoapp.com/)
- [ADScode](#)
