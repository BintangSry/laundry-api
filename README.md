# Laundry API

This is a **Laravel 10**-based Laundry API project used as the backend for desktop and mobile applications.

---

Ini adalah proyek API Laundry berbasis **Laravel 10** yang digunakan sebagai backend untuk aplikasi desktop dan mobile.

---

## Features / Fitur
- CRUD (Create, Read, Update, Delete) operations via API.
- RESTful endpoints for managing laundry data.

## Technologies / Teknologi
- **Framework**: Laravel 10
- **Database**: MySQL / Configurable via `.env`

## Installation / Instalasi
1. Clone this repository / Clone repository ini:
   ```bash
   git clone https://github.com/BintangSry/laundry-api.git
   cd laundry-api
   ```
2. Install dependencies / Install dependencies:
   ```bash
   composer install
   ```
3. Copy `.env.example` to `.env` / Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
4. Generate application key / Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Configure your database in the `.env` file / Konfigurasi koneksi database di file `.env`.
6. Run migrations / Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```
7. Start the local server / Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## API Endpoints / Endpoint API
You can find the complete list of endpoints in the **`routes/api.php`** file.

Daftar lengkap endpoint dapat dilihat di file **`routes/api.php`**.

Example common endpoints / Contoh endpoint umum:
- `GET /api/resource` : Fetch data / Ambil data
- `POST /api/resource` : Create new data / Tambah data
- `PUT /api/resource/{id}` : Update data / Update data
- `DELETE /api/resource/{id}` : Delete data / Hapus data

## Usage / Penggunaan
This API is designed to be integrated with **Desktop** and **Mobile** applications.

API ini dirancang untuk diintegrasikan dengan aplikasi **Desktop** maupun **Mobile**.

## Contribution / Kontribusi
Pull requests and feature suggestions are welcome.

Pull request dan saran fitur baru sangat diterima.
