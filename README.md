# Proyek Laravel

Proyek ini adalah aplikasi berbasis Laravel. Di bawah ini adalah panduan untuk mengatur dan menjalankan aplikasi ini di lingkungan pengembangan lokal.

## Langkah-Langkah Instalasi

1. **Salin dan sesuaikan konfigurasi database di `.env`**
   - Ubah pengaturan database di file `.env` sesuai dengan konfigurasi database lokal Anda:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nama_database
     DB_USERNAME=user_database
     DB_PASSWORD=password_database
     ```

2. **Jalankan Migrasi Database**
   - Untuk membuat tabel database yang diperlukan, jalankan perintah migrasi:
     ```bash
     php artisan migrate
     ```

3. **Jalankan Server Laravel**
   - Untuk menjalankan aplikasi di server lokal, gunakan perintah:
     ```bash
     php artisan serve
     ```
   - Server akan berjalan di `http://127.0.0.1:8000`.

4. **Jalankan Pengembangan Front-End dengan NPM**
   - Jika proyek ini menggunakan Laravel Mix untuk mengelola aset front-end, jalankan perintah berikut untuk memulai proses kompilasi:
     ```bash
     npm run dev
     ```

5. **Hapus Symlink Storage Publik Lama (Opsional)**
   - Jika perlu, hapus symlink storage lama di direktori `public`:
     ```bash
     rm public/storage
     ```

6. **Buat Ulang Symlink Storage Publik**
   - Buat ulang symlink ke folder `storage` agar file di dalam `storage/app/public` bisa diakses dari `public/storage`:
     ```bash
     php artisan storage:link
     ```

7. **Bersihkan Cache dan Optimisasi**
   - Untuk membersihkan cache konfigurasi, cache tampilan, dan lain-lain, jalankan perintah berikut:
     ```bash
     php artisan optimize:clear
     ```

8. **Akses Interface**
   - Buka browser dan akses URL berikut untuk melihat halaman `hero`:
     ```
     http://127.0.0.1:8000/hero
     ```

## Catatan

- Pastikan server database sudah berjalan sebelum menjalankan migrasi.
- Pastikan semua dependensi telah terpasang dengan menjalankan:
  ```bash
  composer install
  npm install
