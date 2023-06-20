<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--font--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!--script_icon--->
    <script src="https://unpkg.com/feather-icons"></script>
    <title>SultanVehicle</title>
</head>
<body>
    <!---Navbar Start--->
<nav class="navbar">
<a href="#" class="navbar-logo">Sultan<span>Vehicle</span></a>
<div class="navbar-nav">
<a href="#home">Home</a>
<a href="#about">Tentang Kami</a>
<a href="input.php">Pinjaman</a>
</div>

<div class="navbar-extra">
    <a href="logout.php"><i data-feather="log-out"></i></a>
    <a href="#" id="dropdown-menu"><i data-feather="menu"></i></a>
  
</div>
</nav>
    <!---Navbar End--->

    <!---Hero Section Start--->
<section class="hero" id="home">
    <main class="content">
        <h1>Berkendara Dengan <Span>Gaya</Span></h1>
        <p>SultanVehicle adalah layanan yang memungkinkan individu atau kelompok untuk menyewa dan mengendarai mobil sport untuk jangka waktu tertentu. Mobil sport merupakan kendaraan yang dirancang untuk memberikan pengalaman mengemudi yang luar biasa, dengan performa yang tinggi, desain yang menarik, dan fitur-fitur canggih.
        Dalam SultanVehicle, para penyedia layanan menyediakan beragam pilihan mobil sport yang dapat disesuaikan dengan preferensi pengguna. Mobil-mobil ini biasanya termasuk merek-merek terkenal dan model-model yang populer di dunia otomotif, seperti Ferrari, Lamborghini, Porsche, Aston Martin, atau BMW M-Series.</p>
        <a href="input.php" class="cta">Pinjam sekarang!</a>
    </main>
</section>
    <!---Hero Section end--->
    
<!--- about section start --->
<section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
        <div class="about-img">
            <img src="img/tentang-kami.jpg" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Kenapa Mobil Sport kami sangat <span>Berkualitas</span></h3>
            <p>Mobil sport kami berkualitas karena kami memastikan bahwa setiap mobil sport yang kami sediakan dalam layanan peminjaman kami menjalani proses seleksi yang ketat dan perawatan berkala yang teratur.</p>
            <br>
<p>
Dengan komitmen kami terhadap pemeliharaan yang berkualitas, perawatan rutin, dan pemilihan mobil sport yang tepat, kami memastikan bahwa mobil sport kami tetap dalam kondisi terbaik untuk memberikan pengalaman mengemudi yang luar biasa kepada pelanggan kami.</p>
        </div>
    </div>
</section>
<!--- about section end --->

<!--- Rent section start--->
<section id="pinjam" class="pinjam">
<h2><span>Mobil</span>Kami</h2>
<p>Inilah merk mobil Sport yang ada di SultanVehicle</p>

<div class="row">
    <div class="menu-card">
        <img src="img/mobil/koenigsegg.jpg" alt="Koenigsegg" class="menu-card-img">
        <h3 class="menu-card-title">-Koenigsegg-</h3>
        <p class="menu-card-price">IDR 350 Jt/Bulan</p>
    </div>
    <div class="menu-card">
        <img src="img/mobil/acura.jpg" alt="Acura" class="menu-card-img">
        <h3 class="menu-card-title">-Acura-</h3>
        <p class="menu-card-price">IDR 350 Jt/Bulan</p>
    </div>
    <div class="menu-card">
        <img src="img/mobil/pagani.jpg" alt="Pagani" class="menu-card-img">
        <h3 class="menu-card-title">-Pagani-</h3>
        <p class="menu-card-price">IDR 350 Jt/Bulan</p>
    </div>
    <div class="menu-card">
        <img src="img/mobil/aston-martin.jpg" alt="Aston Martin" class="menu-card-img">
        <h3 class="menu-card-title">-Aston Martin-</h3>
        <p class="menu-card-price">IDR 250 Jt/Bulan</p>
    </div>
    <div class="menu-card">
        <img src="img/mobil/mercedes.jpg" alt="Toyota" class="menu-card-img">
        <h3 class="menu-card-title">-Mercedes Benz-</h3>
        <p class="menu-card-price">IDR 250 Jt/Bulan</p>
    </div>
    <div class="menu-card">
        <img src="img/mobil/toyota.jpg" alt="Koenigsegg" class="menu-card-img">
        <h3 class="menu-card-title">-Toyota-</h3>
        <p class="menu-card-price">IDR 250 Jt/Bulan</p>
    </div>
    
</div>
<a href="input.php" class="cta">Pinjam sekarang!</a>
</section>
<!--- Rent section end--->

<!---script_icon----> 
<script>feather.replace()</script>

<!---My Javascript---->
<script src="js/script.js"></script>
</body>
</html>