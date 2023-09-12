
# SISTEM INFORMASI MANAJEMEN SKRIPSI

Berikut petunjuk instalasi Sistem Informasi Manajemen Skripsi PNJ.





## Requirement

- XAMPP (versi 8.0.28)
- PHP (versi 8.2.4)
- Laravel (versi 10.13.5)

## Cara Instalasi

1. Clone porject ini 

```bash
git clone https://github.com/niyaraarinda3/Sistem-Informasi-Manajemen-Skripsi-PNJ.git
```
2. Sesuaikan isi file ‘.env’ dengan file ‘.env.example’

3. Jalankan perintah dibawah ini pada terminal :
```bash
npm install

composer install

php artisan migrate:fresh --seed
```
4. Jalankan project dengan menggunakan perintah berikut :

```bash
php artisan serve

npm run dev
```