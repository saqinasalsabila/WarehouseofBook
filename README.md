
<h1>WAREHOUSE OF BOOKS</h1>

## Anggota Kelompok

*Pemrograman Website - C*
1. Saqina Salsabila Larasati    -   [215150200111070]
2. Nadhira Nurannisa            -   [215150207111017]
3. Julia Nur Fajrina            -   [215150201111039]
4. Verizca Maudia Putri         -   [215150207111088]

## Tugas Akhir Pemrograman Web
Nama Website : Warehouse of Books

Warehouse of Books adalah sebuah website yang dirancang khusus untuk membantu admin dalam mengatur dan mengelola ketersediaan buku di sebuah toko buku. Website ini memberikan kemudahan bagi admin untuk mengecek ketersediaan buku, melihat data customer yang merupakan member, dan riwayat order buku dari customer. Website ini dirancang untuk satu peran utama, yaitu Admin, dengan fitur-fitur yang disesuaikan sesuai peran.

### Role Admin:
-Dashboard
![dashboard](readme-img/wob-dashboard.png)

Sebagai admin di Warehouse of Books, Pengguna memiliki akses penuh untuk mengelola ketersediaan buku. Berikut adalah fitur-fitur yang tersedia untuk Pengguna:
- Register : Fitur Register akan membutuhkan nama, email, dan password agar bisa menjadi admin.
- Login: Fitur Login pada admin memungkinkan admin untuk langsung tertuju ke halaman dashboard dengan menu Dashboard, Products, Order, Customer, dan Admin Profile.
- Manajemen Tabel Customer : Pengguna dapat melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data customer. Pengguna dapat menambah customer, melihat daftar customer, mengubah informasi customer, dan menghapus data customer jika itu diperlukan.
- Manajemen Tabel Product : Pengguna dapat melakukan operasi CRUD (Create, Read, Update, Delete) terhadap data buku. Pengguna dapat menambahkan buku, melihat daftar buku, mengubah informasi buku, dan menghapus data buku jika itu diperlukan.
- Manajemen Tabel Order : Pengguna dapat melihat semua order dari customer.
- Manajemen Tabel Order Detail : Pengguna dapat melihat order dari setiap customer secara detail.

Warehouse of Books membantu mempercepat dan mengoptimalkan proses pengecekan ketersediaan buku. Dengan fitur-fitur yang disesuaikan untuk admin, website ini memudahkan koordinasi antara toko buku dan admin untuk memastikan pengalaman yang baik dalam melihat berbagai data.

## Lampiran Screenshot
1. Register
![.reg](readme-img/wob-register.png)

2. Login
![.login](readme-img/wob-login.png)

3. Produk/List Buku
![Product_List](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/a6077add-15a7-4e5e-9da2-39a98cfbfa7f)
![Add_Product](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/ab1d6a85-52aa-473d-9998-9cd2d0f9baae)
![Edit_Product](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/6e15060f-7f16-42ad-8a40-03de905c3123)

5. Tabel Pelanggan/Member
![Customer_Detail](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/1bd8f112-f010-4b6f-beee-45ce1d81095f)
![Customer_List](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/c8a08774-c6c9-419d-a413-b3e7a4668f6e)
![Edit Customer](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/6e38b42b-1fc1-4a56-8e03-14aabe8e4c32)

7. Tabel Riwayat Order
![Order_Detail](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/3b0605df-8503-4233-b243-ae3fad33416b)
![Order_List](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/3cf3f9fb-3793-4c9f-9319-a418bf7f6843)

9. Setting Profile Admin
![Profile](https://github.com/saqinasalsabila/WarehouseofBook/assets/103765178/ed91cd53-496f-4b44-94ab-4b61ae84b62c)

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
