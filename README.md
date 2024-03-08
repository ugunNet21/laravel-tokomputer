<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
```bash

Untuk mendata service laptop dalam sebuah sistem basis data, kita bisa membangun beberapa tabel yang saling terhubung untuk mengelola informasi mengenai pelanggan, laptop, servis, teknisi, dan potensi detail lainnya. Berikut ini adalah contoh sederhana dari struktur tabel dan relasinya:

Tabel-tabel Utama:
Tabel Pelanggan (Customers)

CustomerID (PK)
Nama
Alamat
NoTelepon
Email
Tabel Laptop (Laptops)

LaptopID (PK)
CustomerID (FK)
Merk
Model
SerialNumber
Tabel Servis (Services)

ServiceID (PK)
LaptopID (FK)
TanggalMasuk
TanggalSelesai
DeskripsiMasalah
Status (misal: dalam antrian, sedang diperbaiki, selesai)
TotalBiaya
Tabel Teknisi (Technicians)

TechnicianID (PK)
Nama
Spesialisasi
Kontak
Tabel DetailServis (ServiceDetails)

DetailID (PK)
ServiceID (FK)
TechnicianID (FK)
KeteranganTindakan
Biaya
Relasi antar Tabel:
Pelanggan dan Laptop: Seorang pelanggan bisa memiliki satu atau lebih laptop. Ini adalah relasi satu-ke-banyak dari Pelanggan ke Laptop (one-to-many). Setiap laptop terdaftar memiliki eksak satu pemilik/pelanggan, tetapi satu pelanggan bisa memiliki banyak laptop.

Laptop dan Servis: Setiap entri servis terkait dengan satu laptop. Ini adalah relasi satu-ke-banyak dari Laptop ke Servis (one-to-many). Satu laptop bisa memiliki beberapa catatan servis sepanjang waktu.

Servis dan DetailServis: Untuk setiap servis, bisa jadi terdapat beberapa langkah atau tindakan perbaikan yang dilakukan. Ini menciptakan relasi satu-ke-banyak dari Servis ke DetailServis (one-to-many), dimana satu servis bisa memiliki beberapa detail servis.

Teknisi dan DetailServis: Setiap tindakan atau detail servis yang dilakukan bisa dikaitkan dengan teknisi yang bertanggung jawab. Ini adalah relasi banyak-ke-banyak antara Teknisi dan DetailServis (many-to-many), yang biasanya diimplementasikan dengan menggunakan tabel DetailServis sebagai tabel penghubung yang menyimpan TechnicianID.

Catatan Implementasi:
PrimaryKey (PK) digunakan untuk mengidentifikasi setiap baris di dalam tabel secara unik.
ForeignKey (FK) digunakan untuk menyatakan relasi antar tabel, dimana kunci asing di tabel anak mengacu pada kunci utama di tabel orang tua.
Mekanisme INDEX mungkin diperlukan pada kolom-kolom yang sering menjadi target pencarian atau join untuk meningkatkan performa query.
Pertimbangkan juga aspek keamanan dan privasi data, terutama untuk informasi pelanggan.
```
## Membuat model
```bash
php artisan make:model Customer -m
php artisan make:model Laptop -m
php artisan make:model Service -m
php artisan make:model Technician -m
php artisan make:model ServiceDetail -m

```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
