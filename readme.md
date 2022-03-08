- Pastikan XAMPP, Git dan Composer sudah terinstall di komputer

- Buat folder baru untuk meletakkan project nya
- Buka Command Prompt dan arahkan ke folder yang baru dibuat
- Ketikkan perintah berikut pada Command Prompt "git clone https://github.com/riswandy11/laravel-test.git"
- Jika sudah selesai ketikkan "composer install"

- Buka XAMPP dan pastikan Apache dan MySql berjalan untuk bisa masuk ke php myadmin
- Buka "localhost/phpmyadmin" pada URL Browser
- Klik new masukkan nama database nya : "laravel-test"

- Kembali ke cmd, Ketikkan "php artisan migrate"
- Setelah selesai, ketikkan "php artisan db:seed"
- Setelah selesai , ketikkan "php artisan serve"
- Lalu kembali ke browser ketikkan di URL "localhost:8000"