
# 📦 Sistem Pendataan Barang

![Logo](https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-data-warehouse-big-data-flatart-icons-flat-flatarticons.png)

Sistem Pendataan Barang adalah aplikasi berbasis web menggunakan **PHP Native** dan **MySQL** untuk mengelola data inventaris barang. Aplikasi ini memungkinkan admin untuk melakukan **CRUD (Create, Read, Update, Delete)** terhadap data barang, dengan fitur **pencarian**, **notifikasi alert**, dan tampilan **dashboard** berbasis **Bootstrap 5**.

---

## ✨ Fitur Utama:
- 🔐 **Login Admin**: Akses hanya untuk admin dengan autentikasi sederhana.
- 📋 **CRUD Data Barang**: Tambah, Edit, Hapus, dan Cari barang.
- 🔍 **Pencarian Barang**: Fitur pencarian untuk mempermudah pencarian barang berdasarkan nama.
- 🎉 **Notifikasi Alert**: Menampilkan notifikasi sukses saat menambah, mengedit, atau menghapus data barang.
- 📱 **Responsif dengan Bootstrap 5**: Tampilan yang mobile-friendly dan responsif.

---

## 🛠️ Teknologi yang Digunakan:
- **PHP 8.x (Native)**
- **MySQL** (Database untuk menyimpan data)
- **Bootstrap 5** (Framework CSS untuk tampilan responsif)
- **XAMPP / Apache Server** (Untuk pengembangan lokal)

---

## 📥 Cara Instalasi:

1. **Clone atau Download** repository ini.
2. **Ekstrak** file ke dalam folder `htdocs` (jika menggunakan XAMPP):
   ```
   C:/xampp/htdocs/pendataan-barang/
   ```
3. **Import database** `database.sql` ke phpMyAdmin:
   - Masuk ke phpMyAdmin
   - Pilih **Import**, pilih file `database.sql`
4. **Sesuaikan koneksi database** jika diperlukan pada file `config/koneksi.php`.
5. Jalankan server **Apache** dan **MySQL** menggunakan **XAMPP**.
6. Akses aplikasi melalui browser:
   ```
   http://localhost/pendataan-barang/login.php
   ```

---

## 🔐 Akun Admin Default:
- **Username**: `admin`
- **Password**: `admin123`

---

## 📸 Screenshot:

| Login Page | Dashboard | Data Barang |
|:----------:|:---------:|:-----------:|
| ![Login](path-ke-screenshot-login.png) | ![Dashboard](path-ke-screenshot-dashboard.png) | ![Barang](path-ke-screenshot-barang.png) |

---

## 📈 Rencana Pengembangan:
- Export Data ke PDF/Excel
- Menambahkan Multi-user Role (Admin & Operator)
- Laporan Barang Masuk dan Keluar
- Statistik dan Grafik Barang

---

## 📜 Lisensi:
Proyek ini dibuat untuk keperluan pembelajaran dan pengembangan pribadi.  
**Lisensi**: MIT

> **Build, Learn, and Improve Every Day.** ✨

---

## 🎯 Kontribusi:
Jika Anda tertarik untuk mengembangkan project ini lebih lanjut, silakan buat **Pull Request** atau laporkan **Issues** yang ditemukan.

---

## 💬 Kontak:
Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi saya di:
- Email: `email@domain.com`
- LinkedIn: `https://www.linkedin.com/in/username`
