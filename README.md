# ListKan
Projek RPL | Kelompok E-DY

Sebelum menggunakan, pastikan sudah ada :
- Composer
    > Cek di Command Prompt: composer
- PHP (ver 7.2.5)
    > Cek di Command Prompt: php -v

### Cara menggunakan
- Clone Repository
- Buat satu database
- Lalu Pada Command Prompt, jalankan:
    1. composer install
    2. copy .env.example .env
        > Edit file .env : Samakan nama database (DB_DATABASE) pada .env dengan database yang sudah dibuat.
    3. php artisan key:generate
    4. php artisan migrate --seed 
        > Ini untuk menjalankan migration dan mengisi sampel 'User' dan 'Market' ke database
    5. php artisan serve
- Buka http://127.0.0.1:8000/

### Akun Sampel 
1. Pedagang
    * username: pedagang
    * password: user

2. Pembeli 
    * username: pembeli
    * password: user

