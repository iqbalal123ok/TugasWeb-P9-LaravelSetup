# Laravel Starter App

Aplikasi ini menggunakan Laravel 13, Inertia.js, React, dan TypeScript. Halaman utama dan dashboard dirender melalui komponen React, sedangkan Laravel menangani route, autentikasi, dan akses database.

## Persyaratan

- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm
- MySQL (misalnya melalui XAMPP) atau SQLite

## Menjalankan di komputer lokal

Buka terminal di folder `example-app`, lalu jalankan:

```bash
composer install
```

Jika file `.env` belum ada, salin dari `.env.example` (PowerShell):

```powershell
Copy-Item .env.example .env
```

Buat application key:

```bash
php artisan key:generate
```

### Konfigurasi database

Konfigurasi saat ini menggunakan MySQL dengan database `blog_db`. Pastikan MySQL berjalan dan database tersebut sudah dibuat. Sesuaikan nilai berikut di `.env` jika konfigurasi lokal Anda berbeda:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=
```

Alternatifnya, gunakan SQLite dengan mengubah `DB_CONNECTION=sqlite` di `.env` dan membuat file database jika belum ada:

```powershell
New-Item -ItemType File database/database.sqlite -Force
```

Jangan membagikan file `.env` ke repositori publik karena file tersebut berisi application key dan konfigurasi lokal.

Jalankan migration untuk membuat tabel yang dibutuhkan aplikasi:

```bash
php artisan migrate
```

Pasang dan build aset frontend:

```bash
npm install
npm run build
```

Nyalakan server Laravel:

```bash
php artisan serve
```

Buka [http://127.0.0.1:8000](http://127.0.0.1:8000) di browser.

Saat mengembangkan frontend, jalankan `npm run dev` di terminal kedua agar perubahan React dan CSS dimuat langsung.

## Route utama

| Route | Keterangan |
| --- | --- |
| `/` | Halaman sambutan aplikasi |
| `/login` | Form masuk |
| `/register` | Form pendaftaran |
| `/{current_team}/dashboard` | Dashboard tim untuk pengguna terautentikasi dan terverifikasi |
| `/settings/profile` | Pengaturan profil |
| `/settings/security` | Pengaturan keamanan |
| `/settings/appearance` | Pengaturan tampilan |

Daftar lengkap route dapat dilihat dengan `php artisan route:list`.

## Struktur folder

```text
example-app/
├── app/                  # Model, controller, middleware, dan kode aplikasi
├── bootstrap/            # Bootstrap framework dan cache aplikasi
├── config/               # Konfigurasi Laravel
├── database/
│   ├── factories/        # Factory untuk data contoh dan pengujian
│   ├── migrations/       # Definisi tabel database
│   └── seeders/          # Seeder data awal
├── public/               # Entry point web dan aset publik/build
├── resources/
│   ├── css/              # Stylesheet
│   ├── js/               # Halaman, komponen React, dan TypeScript
│   └── views/             # Root view untuk Inertia
├── routes/               # Definisi route web dan autentikasi
├── storage/              # Log, cache, dan file yang dibuat aplikasi
├── tests/                # Pengujian otomatis
├── .env                  # Konfigurasi lokal (jangan commit)
├── artisan               # CLI Laravel
├── composer.json         # Dependensi PHP dan perintah Composer
└── package.json          # Dependensi dan perintah frontend
```

## Perintah berguna

```bash
php artisan route:list       # Lihat semua route
php artisan migrate:status   # Lihat status migration
php artisan optimize:clear   # Bersihkan cache konfigurasi dan aplikasi
php artisan test             # Jalankan pengujian
```

## Troubleshooting

- **`could not find driver`**: aktifkan ekstensi PDO yang sesuai (`pdo_mysql` untuk MySQL atau `pdo_sqlite` untuk SQLite) pada konfigurasi PHP yang digunakan.
- **`Unknown database 'blog_db'`**: buat database `blog_db` di MySQL atau sesuaikan konfigurasi database di `.env`.
- **`No application encryption key has been specified`**: jalankan `php artisan key:generate`.
- **Aset tidak ditemukan atau tampilan belum diperbarui**: jalankan `npm install` dan `npm run build`, atau nyalakan `npm run dev`.
- **Perubahan `.env` tidak terbaca**: jalankan `php artisan optimize:clear`.
