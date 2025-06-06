# 🌟 Stilo

SATTTTT DELOKEN TUTOR E

---

## 🚀 Cara Menjalankan Proyek Ini Setelah di-Clone

### 1. Clone Repository

```bash
git clone https://github.com/cciia/stilofix.git
cd stilofix
```

### 2. Install Dependency PHP via Composer

```bash
composer install
```

### 3. GANTI `.env.example jadi .env` dan Generate App Key

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database di File `.env`

Edit bagian ini sesuai pengaturan database lokal kamu:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Buka resource/views/
```semua yang ada di views ganti sesuaikan frontend mu 
home, cart, detail, home
```

> Jangan lupa buat database-nya di MySQL sebelum migrate! (ini nanti aja pas aku udah ngasih backendnya)

### 6. Jalankan Migrasi dan Seeder (soon)

```bash
php artisan migrate
php artisan db:seed  (belom)
```

### 7. Jalankan Server Laravel (soon)

```bash
php artisan serve
```

Buka browser dan akses:

```
http://127.0.0.1:8000
```

### 8. (Opsional) Install Frontend Dependency

Jika proyek ini menggunakan Vite atau Tailwind:

```bash
npm install
npm run dev
```

---

## 📁 Struktur Folder Penting

| Folder                 | Fungsi                                           |
| ---------------------- | ------------------------------------------------ |
| `app/`                 | Berisi model, controller, dan logika aplikasi    |
| `routes/`              | Berisi file routing (`web.php`, `api.php`)       |
| `resources/views/`     | Template tampilan dengan Blade                   |
| `database/migrations/` | Berisi struktur tabel database                   |
| `.env`                 | Konfigurasi environment seperti DB, App Key, dll |

---


ikutonoooo! 😄