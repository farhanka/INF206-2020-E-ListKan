# ListKan
Projek RPL
# Cara menggunakan
- Clone Repository
- Buat satu database
- Lalu Pada Command Prompt, jalankan:
    1. composer install
    2. copy .env.example .env
        * Samakan nama database pada .env dengan database yang sudah dibuat.
    3. php artisan key:generate
    4. php artisan migrate --seed
    5. php artisan serve
- Buka http://127.0.0.1:8000/
