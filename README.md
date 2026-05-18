<div align="center">
  <h1>🏢 Aplikasi Absensi Karyawan</h1>
  <p>Sistem Informasi Absensi Karyawan berbasis Web menggunakan <b>Laravel 8</b></p>

  [![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
  [![PHP](https://img.shields.io/badge/PHP-%5E7.3%20|%208.0-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
  [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)
</div>

---

## 📖 Tentang Project

**Aplikasi Absensi Karyawan** adalah sebuah sistem informasi berbasis web sederhana yang dirancang untuk memudahkan proses pencatatan dan pengelolaan absensi (kehadiran) karyawan. Aplikasi ini membedakan hak akses antara **Admin** dan **Karyawan (User)**, sehingga data kehadiran dapat dikelola secara terpusat, aman, dan efisien.

Project ini sangat cocok digunakan sebagai referensi belajar maupun dikembangkan lebih lanjut untuk kebutuhan instansi atau perusahaan berskala kecil hingga menengah.

## ✨ Fitur Utama

### 👨‍💼 Halaman Admin
- **Dashboard Admin**: Ringkasan data absensi.
- **Manajemen User**: Menambah (`Create`), mengedit (`Update`), dan melihat data karyawan.
- **Rekap Absensi**: Memantau daftar riwayat kehadiran (absensi) seluruh karyawan.

### 👤 Halaman Karyawan (User)
- **Dashboard User**: Halaman utama karyawan setelah login.
- **Form Absensi**: Karyawan dapat melakukan absensi / check-in kehadiran.
- **Riwayat Absen**: Karyawan dapat melihat status absensinya.

## 🛠️ Teknologi yang Digunakan

- **Framework PHP**: [Laravel 8.x](https://laravel.com/)
- **Frontend**: Blade Templating Engine & UI Toolkit
- **Database**: MySQL (via Eloquent ORM)

## 🚀 Panduan Instalasi (Local Development)

Ikuti langkah-langkah di bawah ini untuk menjalankan project di komputer Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username-anda/nama-repo.git
   cd nama-repo
   ```

2. **Install Dependensi Composer**
   ```bash
   composer install
   ```

3. **Install Dependensi NPM**
   ```bash
   npm install && npm run dev
   ```

4. **Konfigurasi Environment**
   Duplikat file `.env.example` dan ubah namanya menjadi `.env`.
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` dan atur koneksi database Anda (sesuaikan dengan lokal Anda):
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_absensi
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi Database & Seeder**
   Pastikan Anda sudah membuat database kosong di MySQL Anda (misal: `db_absensi`), lalu jalankan perintah ini untuk membuat tabel beserta data dummy-nya:
   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan Local Server**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di browser Anda melalui: `http://localhost:8000`

## 🔑 Akun Demo (Default Credentials)

Setelah database berhasil di-seed, Anda dapat mencoba login menggunakan akun default berikut:

| Role | Email | Password |
|------|-------|----------|
| **Admin** | `admin@gmail.com` | `11` |
| **Karyawan 1**| `user1@gmail.com` | `11` |
| **Karyawan 2**| `user2@gmail.com` | `11` |

> **⚠️ Catatan Keamanan**: Pastikan untuk segera mengganti password default ini apabila aplikasi akan di-deploy ke production atau public server!

## 📸 Tampilan Aplikasi (Screenshots)

*(Silakan tambahkan screenshot / tangkapan layar aplikasi Anda di sini agar terlihat lebih profesional di mata pengunjung)*

| Dashboard Admin | Halaman Absensi Karyawan |
|:---:|:---:|
| <img src="https://via.placeholder.com/600x350?text=Screenshot+Admin+Dashboard" alt="Admin Dashboard" width="100%"> | <img src="https://via.placeholder.com/600x350?text=Screenshot+User+Dashboard" alt="User Dashboard" width="100%"> |

## 🤝 Kontribusi

Kami sangat menyambut baik segala bentuk kontribusi! Jika Anda menemukan bug atau memiliki ide fitur baru, silakan:
1. Fork repository ini.
2. Buat branch fitur baru (`git checkout -b fitur-baru`).
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur XYZ'`).
4. Push ke branch tersebut (`git push origin fitur-baru`).
5. Buka **Pull Request**.

## 📄 Lisensi

Project ini bersifat _Open-Source_ di bawah lisensi [MIT License](https://opensource.org/licenses/MIT). Anda bebas untuk menggunakan, mengubah, dan mendistribusikannya untuk berbagai keperluan.

---
**Dibuat dengan ❤️ oleh Yazid Bustomi**
