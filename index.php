<?php
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="theme-color" content="#9dc183">
  <title>SMK AK NUSA BANGSA || website galeri</title>
  <link rel="shortcut icon" type="x-icon" href="img/logo1.jpg.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" >
  <style>/* Resetting default margin and padding */
h3{
  margin-top:40px;
  margin-bottom:40px;
  font-size: 40px;
  text-align: center;
}
html, body {
  height: 100%;
  font-family: Arial, sans-serif;
  background-color: #fff;
}

/* Styling untuk video perkenalan */
.video-intro {
  position: relative;
  width: 100%;
  height: 100vh; /* Menggunakan tinggi penuh layar */
  overflow: hidden;
}

#intro-video {
  object-fit: cover;
  width: 100%;
  height: 100%;
  display: block;
}

/* Navbar Styling */
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #9DC183; /* Latar belakang solid untuk navbar */
  color: white;
  padding: 15px 0;
  z-index: 10; /* Agar navbar di atas video */
}

.navbar ul {
  list-style-type: none;
  text-align: center;
}

.navbar ul li {
  display: inline;
  margin: 0 20px;
}

.navbar ul li a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;
}

.navbar ul li a:hover {
  border-bottom: 2px solid white;
}
.img{
  margin-left: 20px;
}
/* Styling untuk header */
.header{
  position: relative;
  z-index: 1; /* Agar header di atas video */
  text-align: center;
  padding: 50px 20px;
  color: white;
  background: #9dc183; /* Transparansi untuk background header */
}
body, ul, li, a {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
/* Style header */
.main-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #9dc183;
    color: white;
}

/* Style logo */
.logo img {
    height: 50px;
    width: auto;
}
/* Style menu navigasi */
.nav-menu ul {
    display: flex;
    gap: 20px;
}
.dropbtn {
  background-color: #9dc183;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #9dc183;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #9dc183}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.nav-menu a {
    color: white;
    font-size: 16px;
    font-weight: bold;
    transition: color 0.3s ease;
}

.nav-menu a:hover {
    color: #ffa500; /* Warna efek hover */
}

.containerf{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #9dc183;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #fffdd0;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #ffffff;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul p{
  text-align: justify;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

.footer-text {
  text-align: center;
  padding: 5px 5px;
  background-color: #f1f1f1f;
  color: black;
  font-size: 1.2em;
}



</style>
</head>
<body>
  
<header class="main-header">
        <div class="logo">
        <img src="img/aknb.png" alt="Logo" />
        <img src="img/bonet.png" alt="Logo" />
        </div>
        <nav class="nav-menu">
            <ul>
            <div class="dropdown">
            <li><a href="#">Kompetensi</a></li>
            <div class="dropdown-content">
            <a href="pplg.php">PPLG</a>
            <a href="farmasi.php">Analis Kimia</a>
            <a href="ak.php">Farmasi</a>
            </div>
            </div>
            <div class="dropdown">
            <li><a href="#">Ekstrakulikuler</a></li>
            <div class="dropdown-content">
            <a href="#">Voli</a>
            <a href="#">GPS</a>
            <a href="#">Futsal</a>
            </div>
            </div>
            <li><a href="guru.php">Profil Guru</a></li>
            <li><a href="prestasi.php">Prestasi</a></li>
            <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="search">
    <div class="container">
        <form action="galeri.php">
            <input type="text" name="search" placeholder="cari foto" />
            <input type="submit" name="cari" value="cari foto" />
</form>
</div>
</div>
  <!-- Video Pengenalan -->
  <div class="video-intro">
    <video id="intro-video" autoplay muted loop>
      <source src="img/aknb.mp4" type="video/mp4">
    </video>
  </div>
  
  
   
    <h3>Foto Terpopuler</h3>
    <div class="box">
       <?php
           $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status = 1 ORDER BY image_id DESC LIMIT 8");
           if(mysqli_num_rows($foto) > 0){
               while($p = mysqli_fetch_array($foto)){
       ?>
       <a href="detail-image.php?id=<?php echo $p['image_id'] ?>">
       <div class="col-4">
           <img src="foto/<?php echo $p['image'] ?>" height="150px" />
           <p class="nama"><?php echo substr($p['image_name'], 0, 30)  ?></p>
           <p class="admin">Nama User : <?php echo $p['admin_name'] ?></p>
           <p class="nama"><?php echo $p['date_created']  ?></p>
       </div>
       </a>
       <?php }}else{ ?>
           <p>Foto tidak ada</p>
       <?php } ?>
    </div>
 </div>


 <footer class="footer">
  	 <div class="containerf">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Hubungi Kami</h4>
  	 			<ul>
  	 				<p>SMK AK NUSA BANGSA ⋅ JL. BARU KH. SOLEH ISKANDAR KM. 4, KOTA BOGOR ,16161</p>
             <p>Alamat JL. BARU KH. SOLEH ISKANDAR KM. 4 </p>
              <p> Telepon (0251) 7536316</p> 
              <P>Email smkaknusabangsa@gmail.com</P>
  	 			</ul>
  	 		</div>

  	 		<div class="footer-col">
  	 			<h4>Ikuti Kami</h4>
  	 			<div class="social-links">
  	 				<a href="https://m.facebook.com/smkaknusabangsa/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href=" https://x.com/analiskimianb?lang=en "><i class="fab fa-x"></i></a>
  	 				<a href="https://www.instagram.com/smkaknusabangsa?igsh=ZHVvZjR2enJpMnpw"><i class="fab fa-instagram"></i></a>
  	 				<a href=" https://www.tiktok.com/@smkaknusabangsa "><i class="fab fa-tiktok"></i></a>
  	 			</div>
  	 		</div>
         <div class="row">
  	 		<div class="footer-col">
  	 			<h4>Kritik&Saran</h4>
           <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

       </div>
       </div>
       <div class="row">
  	 		<div class="footer-col">
  	 			<h4>Lokasi</h4>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.746335414853!2d106.77231537410117!3d-6.553674964064975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c386205f18f9%3A0xaf869d94c5b9c42a!2sSMK%20Analis%20Kimia%20Nusa%20Bangsa!5e0!3m2!1sen!2sid!4v1732948852688!5m2!1sen!2sid" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
       </div>
      </div>
  	 </div>

     
  </footer>
  <div class="footer-text">
                    <p>
                     © Copyright <b>SMK AK Nusa Bangsa</b>. All Rights Reserved.
                    </p>
                   </div>
</body>

</html>