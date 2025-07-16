# Laundry API

![Express.js](https://img.shields.io/badge/Express.js-000000?style=for-the-badge&logo=express&logoColor=white) ![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) ![JWT](https://img.shields.io/badge/JWT-000000?style=for-the-badge&logo=jsonwebtokens&logoColor=white)

RESTful API untuk sistem manajemen laundry, dibangun menggunakan Node.js, Express.js, dan Sequelize sebagai ORM untuk database MySQL.

## 📖 Tentang Proyek

Proyek ini adalah backend service (API) yang menyediakan fungsionalitas untuk mengelola operasional bisnis laundry. API ini mencakup manajemen user, outlet, paket laundry, hingga pencatatan transaksi. Autentikasi pengguna diimplementasikan menggunakan JSON Web Tokens (JWT).

## ✨ Fitur Utama

-   **Autentikasi & Otorisasi**: Sistem registrasi dan login untuk user (admin, kasir, owner) dengan JWT.
-   **Manajemen User**: Operasi CRUD (Create, Read, Update, Delete) untuk data pengguna.
-   **Manajemen Outlet**: Operasi CRUD untuk data outlet/cabang laundry.
-   **Manajemen Paket**: Operasi CRUD untuk jenis-jenis paket laundry yang ditawarkan (misal: cuci kering, cuci setrika, dll.).
-   **Manajemen Transaksi**: Mencatat transaksi baru, mengubah status pembayaran, dan mengubah status pengerjaan laundry.
-   **Validasi Data**: Menggunakan `joi` untuk memastikan data yang masuk ke API valid.
-   **Upload Gambar**: Menggunakan `multer` untuk menangani upload file (jika diperlukan).

## 🛠️ Tumpukan Teknologi (Tech Stack)

-   **Backend**: Node.js, Express.js
-   **Database**: MySQL
-   **ORM**: Sequelize
-   **Autentikasi**: JSON Web Token (`jsonwebtoken`), `bcryptjs` untuk hashing password.
-   **Validasi**: Joi
-   **Lain-lain**: `dotenv` untuk environment variables, `cors` untuk Cross-Origin Resource Sharing.

## 🚀 Panduan Instalasi & Menjalankan Lokal

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut.

### Prasyarat

-   [Node.js](https://nodejs.org/) (disarankan versi LTS)
-   [Git](https://git-scm.com/)
-   Server Database MySQL

### Langkah-langkah Instalasi

1.  **Clone repositori ini**
    ```bash
    git clone https://github.com/BintangSry/laundry-api.git
    ```

2.  **Masuk ke direktori proyek**
    ```bash
    cd laundry-api
    ```

3.  **Install semua dependency yang dibutuhkan**
    ```bash
    npm install
    ```

4.  **Konfigurasi Environment Variable**
    Salin file `.env.example` menjadi file baru bernama `.env`.
    ```bash
    cp .env.example .env
    ```
    Kemudian, buka file `.env` dan sesuaikan nilainya dengan konfigurasi lokal Anda, terutama untuk koneksi database.
    ```env
    # Konfigurasi Database
    DB_HOST=localhost
    DB_USER=root
    DB_PASSWORD=password_database_anda
    DB_NAME=nama_database_anda

    # Konfigurasi Aplikasi
    APP_PORT=8000

    # Kunci Rahasia untuk JWT
    SECRET_KEY=ini_adalah_kunci_rahasia_anda
    ```

5.  **Setup Database**
    -   Pastikan server MySQL Anda sudah berjalan.
    -   Buat sebuah database baru di MySQL dengan nama yang sama seperti yang Anda atur di `DB_NAME` pada file `.env`.
    -   Jalankan migrasi untuk membuat semua tabel yang dibutuhkan.
        ```bash
        npx sequelize-cli db:migrate
        ```
    -   (Opsional) Jalankan seeder untuk mengisi data awal ke dalam database.
        ```bash
        npx sequelize-cli db:seed:all
        ```

6.  **Jalankan Aplikasi**
    -   Untuk mode pengembangan (dengan auto-reload menggunakan `nodemon`):
        ```bash
        npm run dev
        ```
    -   Untuk mode produksi:
        ```bash
        npm start
        ```
    Server akan berjalan di `http://localhost:8000` (atau port yang Anda tentukan di `.env`).

## ⚙️ Dokumentasi API (Endpoints)

Anda dapat menggunakan tools seperti [Postman](https://www.postman.com/) atau [Insomnia](https://insomnia.rest/) untuk menguji endpoint API.

Berikut adalah beberapa contoh route utama yang tersedia:

| Metode | Endpoint                 | Deskripsi                                        | Membutuhkan Token? |
| :----- | :----------------------- | :----------------------------------------------- | :----------------- |
| `POST` | `/api/auth/register`     | Mendaftarkan user baru.                          | Tidak              |
| `POST` | `/api/auth/login`        | Login untuk mendapatkan token JWT.               | Tidak              |
| `GET`  | `/api/users`             | Mendapatkan semua data user.                     | Ya                 |
| `POST` | `/api/users`             | Menambahkan user baru.                           | Ya                 |
| `GET`  | `/api/outlets`           | Mendapatkan semua data outlet.                   | Ya                 |
| `POST` | `/api/pakets`            | Menambahkan paket laundry baru.                  | Ya                 |
| `POST` | `/api/transaksi`         | Membuat transaksi baru.                          | Ya                 |
| `PUT`  | `/api/transaksi/status/:id` | Mengubah status pengerjaan laundry.           | Ya                 |

**Catatan**: Untuk mengakses endpoint yang membutuhkan token, sertakan token JWT yang didapat saat login pada `Authorization` header dengan format `Bearer <token>`.

## 📂 Struktur Proyek
Use code with caution.
Markdown
.
├── controllers/ # Logika bisnis untuk setiap route
├── middlewares/ # Middleware (seperti verifikasi JWT, upload file)
├── migrations/ # File migrasi database Sequelize
├── models/ # Definisi model (tabel) Sequelize
├── routes/ # Definisi endpoint API
├── seeders/ # File seeder untuk data awal
├── .env.example # Contoh file environment
├── index.js # File utama (entry point) aplikasi
└── package.json # Daftar dependency dan skrip
Generated code
## 🤝 Berkontribusi

Kontribusi sangat kami apresiasi! Jika Anda ingin berkontribusi, silakan:

1.  **Fork** repositori ini.
2.  Buat **Branch** baru (`git checkout -b fitur/NamaFitur`).
3.  Lakukan perubahan dan **Commit** (`git commit -m 'Menambahkan Fitur A'`).
4.  **Push** ke Branch Anda (`git push origin fitur/NamaFitur`).
5.  Buka sebuah **Pull Request**.

## 📝 Lisensi

Proyek ini tidak memiliki lisensi spesifik. Anda disarankan untuk menambahkan file `LICENSE` (misalnya [MIT License](https://opensource.org/licenses/MIT)) jika proyek ini bersifat open source.
