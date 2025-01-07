<!DOCTYPE html>
<html>
<head>
<title>layout responsive</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 60px;
  text-align: left;
  background:rgb(159, 85, 11);
  color: white;
}

.navbar {
  display: flex;
  background-color: rgb(114, 124, 124) ;
}

.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.row {  
  display: flex;
  flex-wrap: wrap;
}

.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {
  flex: 70%;
  background-color: #faf0e6;
  padding: 20px;
}

.fakeimg {
  background-color:rgb(198, 198, 198);
  width: 100%;
  padding: 20px;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
</style>
</head>
<body>

<!-- Header -->
<div class="header">
<img src="https://www.contexteditor.org/wp-content/uploads/2021/11/logo.gif" alt="Company Logo" width="200px" height="100px" />
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">home</a>
  <a href="#">about</a>
  <a href="#">contact</a>
  <a href ="#" >nav....</a>

</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>galeri saya</h5>
<img src="https://upload.wikimedia.org/wikipedia/commons/5/52/%C4%8Cakam_na_mamico%2C_linorez.jpg" alt="gambar utama" width="200">
    <p>img lain</p>
<img src=https://upload.wikimedia.org/wikipedia/commons/c/c7/Teloh%2C_akvarel%2C_1998.jpg alt="gambar2" width="100">
 <img src=https://upload.wikimedia.org/wikipedia/commons/b/bd/Kathrin_Maurer_Bild.jpg alt="gambar1" width="100">
 <img src=https://upload.wikimedia.org/wikipedia/commons/b/b4/Aprilsko_vreme%2C_ilustracija_v_Kurir%C4%8Dku%2C_1968-69.jpg alt="gambar3" width="100">

  </div>
  <div class="main">
    <h2>Web developer</h2>
        <h5>07-01-2025</h5>
    <img src="https://dashboard.primakara.ac.id/uploads/web_developer_228cc75a78.jpeg" alt="komputer" width="200">
Web developer kini menjadi salah satu profesi favorit. Banyaknya peminat sebagai developer ini kemudian membuat sektor pengembangan website menjadi salah satu bidang pekerjaan dengan penghasilan tertinggi. Tidak heran bila saat ini banyak orang yang berlomba-lomba ingin menjadi pengembang website.

Pengembang website pada dasarnya adalah seorang programmer yang bertugas membuat dan mengembangkan website untuk klien (klien ini biasanya adalah perusahaan atau instansi, bahkan perorangan). Di era digital ini, kebutuhan akan website memang cukup tinggi. Website digunakan sebagai representasi, portofolio, atau company profile bagi sebuah perusahaan.
Untuk menjadi seorang pengembang web profesional, Anda perlu mempelajari banyak hal. Selain dasar-dasar pemrograman, tentunya Anda juga harus belajar masalah teknologi perkembangan website terbaru.Yuk simak apa saja yang harus di pelajari.
<h2>pengenalan tentang html</h2>
    <h5>07-01-2025</h5>
    <img src="https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png" alt="Logo Resmi HTML5" width="200">
    HTML dan CSS adalah bahasa pemrograman yang digunakan untuk membuat dan mendesain halaman web: 
HTML
(Hypertext Markup Language) adalah bahasa markah yang digunakan untuk menentukan struktur dan konten halaman web. HTML mendefinisikan elemen-elemen seperti teks, gambar, dan tautan. 
CSS
(Cascading Style Sheets) adalah bahasa pemrograman yang digunakan untuk mengatur tampilan dan presentasi halaman web. CSS mengatur cara elemen-elemen HTML ditampilkan, seperti warna, ukuran, posisi, dan gaya teks. 
HTML dan CSS memiliki keterikatan yang erat. HTML merupakan fondasi yang menyediakan struktur dasar halaman, sedangkan CSS berfungsi untuk memberi gaya pada halaman tersebut. 
Untuk membuat halaman web, Anda bisa: 
Membuat dokumen HTML pada aplikasi editor HTML, seperti Visual Studio atau Sublime Text. 
Menyimpan dokumen HTML dengan format html atau htm. 
Menggunakan tag HTML untuk membuat dan mengorganisir tata letak halaman web. Tag HTML memiliki tag pembuka dan penutup, yang menggunakan simbol kecil (<) dan besar (>). 
Selain HTML dan CSS, bahasa pemrograman yang juga penting untuk mendesain situs web adalah JavaScript. JavaScript digunakan untuk menambahkan interaktivitas dan fungsi ke halaman web.
</div>

<!-- Footer -->
<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>