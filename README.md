````markdown
# ☕ Coffee Shop Laravel Website

Website bertema coffee shop berbasis Laravel dan PostgreSQL. Website ini terdiri dari beberapa section seperti specialty coffee, kategori produk, blog, dan lainnya.

## 🔧 Instalasi & Setup

Ikuti langkah-langkah berikut untuk menjalankan project ini secara lokal.

### 1. Clone Repository

```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
```
````

### 2. Install Composer Dependencies

```bash
composer install
```

### 3. Copy File `.env` dan Konfigurasi

```bash
cp .env.example .env
```

Edit file `.env` dan sesuaikan bagian berikut:

```env
APP_NAME="CoffeeShop"
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nama_database
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

> Pastikan database PostgreSQL sudah dibuat sesuai nama di atas.

### 4. Generate App Key

```bash
php artisan key:generate
```

### 5. Jalankan Migrasi (Opsional)

Jika ada file migration:

```bash
php artisan migrate
```

### 6. Jalankan Server

```bash
php artisan serve
```

Akses website di:

```
http://127.0.0.1:8000
```

---

## 📦 Frontend Assets (Jika Diperlukan)

Jika proyek menggunakan Laravel Mix atau Vite untuk CSS/JS:

### Install & Compile Assets

```bash
npm install
npm run dev
```

> Pastikan sudah menginstal [Node.js](https://nodejs.org/).

---

## 📁 Struktur Folder Penting

-   `resources/views/` – File Blade Template (`home.blade.php`, dll).
-   `public/images/` – Gambar untuk halaman frontend.
-   `routes/web.php` – Routing halaman.
-   `app/Http/Controllers/` – Logic controller (jika digunakan).

---
