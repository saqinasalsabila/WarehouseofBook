<h1>WAREHOUSE OF BOOKS</h1>

## Anggota Kelompok

*Pemrograman Website - C*
1. Saqina Salsabila Larasati    -   [215150200111070]
2. Nadhira Nurannisa            -   [215150207111017]
3. Julia Nur Fajrina            -   [215150201111039]
4. Verizca Maudia Putri         -   [215150207111088]

## Tugas Akhir Pemrograman Web
Nama Website : Warehouse Of Books

Warehouse Of Books adalah sebuah website yang dirancang khusus untuk membantu admin dalam mengatur dan mengelola ketersediaan buku di sebuah perpustakaan. Website ini memberikan kemudahan bagi admin untuk mengecek ketersediaan buku, melihat data order buku dari customer. Website ini dirancang untuk satu peran utama, yaitu Admin, dengan fitur-fitur yang disesuaikan sesuai peran.

### 1. Role Admin:
![dashboard](...........)

Sebagai admin di Warehouse Of Books, Anda memiliki akses penuh untuk mengelola ketersediaan buku. Berikut adalah fitur-fitur yang tersedia untuk Anda:
- Register : Fitur Register akan membutuhkan nama, email, dan password agar bisa menjadi admin.
- Login: Fitur Login pada admin memungkinkan admin untuk langsung tertuju ke halaman dashboard dengan menu Dashboard, Products, Order, Customer, dan Admin Profile.
- Manajemen Tabel Customer : Anda dapat melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data customer. Anda dapat menambah customer, melihat daftar customer, mengubah informasi customer, dan menghapus data customer jika itu diperlukan.
- Manajemen Tabel Product : Anda dapat melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data buku. Anda dapat menambahkan buku, melihat daftar buku, mengubah informasi buku, dan menghapus data buku jika itu diperlukan.
- Manajemen Tabel Order : Anda dapat melihat semua order dari customer.
- Manajemen Tabel Order Detail : Anda dapat melihat order dari setiap customer secara detail.

Warehouse Of Books membantu mempercepat dan mengoptimalkan proses pengecekan ketersediaan buku. Dengan fitur-fitur yang disesuaikan untuk admin, website ini memudahkan koordinasi antara perpustakaan dan admin untuk memastikan pengalaman yang baik dalam melihat berbagai data.

## Lampiran Screenshot
1. Register
![.reg](readme-img/wob-register.png)

2. Login
![.login](readme-img/wob-login.png)

3. Produk/List Buku
![.product]()

4. Tabel Pelanggan/Member
![.customer]()

5. Tabel Riwayat Order
![.order]()

6. Setting Profile Admin
![.profile]()

## Installation
- `git clone <URL HTTPS Github>`
- `cd .../WarehouseofBook-main`
- `composer install`
- `cp .env.example .env`
- Ubah ke `.env`
- `php artisan key:generate`
- Buat database `laravel` di PHP MyAdmin
- `php artisan migrate`
- `php artisan db:seed`
