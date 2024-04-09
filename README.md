# Tugas EIS 28 Maret 2024: Templating dgn CodeIgniter 4

## Deskripsi Tugas
Tugas ini bertujuan untuk memahami konsep *slicing template* menggunakan **CodeIgniter 4**. Kalian akan memilih template dari [w3layouts.com](https://w3layouts.com/) dan mengintegrasikannya dengan proyek CodeIgniter 4. Berikut langkah-langkahnya:

1. **Buat Projek Baru CodeIgniter**
   - Buat proyek baru menggunakan CodeIgniter 4.
   - Pastikan Kalian memiliki [XAMPP](https://www.apachefriends.org/index.html) terinstal di komputer Kalian.

2. **Pilih Template**
   - Kunjungi [w3layouts.com](https://w3layouts.com/) dan pilih template yang sesuai dengan kebutuhan Kalian. Template yang akan digunakan adalah [Moden Brand Template - Intelligence](https://w3layouts.com/template/the-ultimate-website-template-for-modern-and-intelligent-brands-intelligence-website-template/).

3. **Slicing Template**
   - Pisahkan setiap bagian template menjadi komponen berikut:
     - `head`: Bagian untuk mengatur *head* (misalnya, tag `<title>` dan `<meta>`).
     - `navheader`: Bagian untuk *navbar header*.
     - `navbar`: Bagian untuk *navbar* samping kanan atau kiri (jika ada).
     - `footer`: Bagian untuk *footer*.
     - `scripts`: Bagian untuk *javascript template*.

4. **Buat Tiga+ Halaman**
   - Buat tiga halaman dari template yang telah dipilih menggunakan tiga *routes* berbeda di CodeIgniter 4. Halaman yang dipilih bebas.
   - Untuk Routes yang dibuat adalah :
     - index
     - about
     - services
     - contact

5. **URL Template**
   - Buat sebuah file teks pada proyek dan *paste* URL dari template yang telah dipilih.

## Cara Setup Proyek ini dengan XAMPP
Berikut adalah langkah-langkah untuk mengatur proyek CodeIgniter 4 menggunakan XAMPP:

1. **Instal XAMPP (Karena saya menggunakan XAMPP)**
   - Unduh dan instal [XAMPP](https://www.apachefriends.org/index.html) di komputer Kalian.
   - Install Modules Apache
   - Di module Apache, buka Config > php.ini > lalu edit bagian 'extension=intl' supaya terbaca.

3. **Unduh Project**
   - Unduh project GitHub ini.
   - Ekstrak arsip yang telah diunduh ke folder *htdocs* di direktori XAMPP.

5. **Akses Proyek Melalui Browser**
   - Buka browser dan akses proyek menggunakan URL berikut: [http://localhost/demo-intelligence/public/index](http://localhost/demo-intelligence/public/index) untuk membuka halaman utama.

## Disclaimer
Template yang digunakan berasal dari [w3layouts.com](https://w3layouts.com/template/the-ultimate-website-template-for-modern-and-intelligent-brands-intelligence-website-template/). Pastikan untuk mematuhi lisensi dan ketentuan penggunaan template tersebut.

```
https://w3layouts.com/template/the-ultimate-website-template-for-modern-and-intelligent-brands-intelligence-website-template/
```
