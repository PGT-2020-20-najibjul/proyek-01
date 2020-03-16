<!DOCTYPE html>
<html lang="en">
<head>

     <title>Native Project</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                        
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="mailto:muhammadnajibj@gmail.com">muhammadnajibj@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Native Project 2020</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Mahasiswa</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Politeknik Gajah Tunggal</h3>
                                             <h1>31</h1>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Politeknik Gajah Tunggal</h3>
                                             <h1>Electrical Engineering</h1>
                                        </div>
                                   </div>
                              </div>
                              
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Mahasiswa </h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                              </div>




<?php
//memasukkan file config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Tugas Native</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
crossorigin="anonymous">
</head>
<body><link rel="stylesheet" href="mbcsmb4ef5.css" type="text/css" />


<!-- Navigation menus created with the free version of Easy CSS Menu downloaded from www.easycssmenu.com
     You are free to use this menu code for personal, non-commercial use only. Any other use is a serious violation of copyright laws.
     You are required to retain this comment block in your website code in an unchanged fashion.
     The above limitations do not apply on menus created with the paid version of the software. -->
  <div id="mb4ef5ebul_wrapper" style="max-width:1000px;">
  <ul id="mb4ef5ebul_table" class="mb4ef5ebul_menulist css_menu">
 
  
 
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="mbjsmb4ef5.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="#"></a>

<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<!--<li class="nav-item active">
<a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="tambah.php">Tambah</a>
</li>-->
</ul>
</div>
</div>
</nav>
<div class="container" style="margin-top:20px">
<h2><u>Daftar Mahasiswa</u></h2>
<hr>
<table class="table table-striped table-hover table-sm table-bordered">
<thead class="thead-dark">
<tr>
<th>NO.</th>
<th>NIM</th>
<th>NAMA MAHASISWA</th>
<th>JENIS KELAMIN</th>
<th>JURUSAN</th>
<th>AKSI</th>
</tr>
</thead>
<tbody>
<?php
//query ke database SELECT tabel mahasiswa urut berdasarkan id
//yang paling besar
$sql = mysqli_query($koneksi, "SELECT  a.nim, a.nama, a.jenis_kelamin, a.id, a.jurusan
,b.kd_mk,b.kd_dosen,b.uts,b.uas,
c.nama_mk, c.sks
FROM mahasiswa AS a
left JOIN nilai AS b
ON a.nim=b.nim
left JOIN matakuliah AS c
ON c.kd_mk=b.kd_mk") or die(mysqli_error($koneksi));
//jika query diatas menghasilkan nilai > 0 maka menjalankan script di
//bawah if...
if(mysqli_num_rows($sql) > 0){
//membuat variabel $no untuk menyimpan nomor urut
$no = 1;
//melakukan perulangan while dengan dari dari query $sql
while($data = mysqli_fetch_assoc($sql)){
//menampilkan data perulangan
echo '
<tr>
<td>'.$no.'</td>
<td>'.$data['nim'].'</td>
<td>'.$data['nama'].'</td>
<td>'.$data['jenis_kelamin'].'</td>
<td>'.$data['jurusan'].'</td>
<td>
<a href="edit.php?id='.$data['id'].'"
class="badge badge-warning">Edit</a>
<a
href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin
menghapus data ini?\')">Delete</a>
</td>
</tr>
';
$no++;
}
//jika query menghasilkan nilai 0
}else{
echo '
<tr>
<td colspan="6">Tidak ada data.</td>
</tr>
';
}
?>
<tbody>
</table>
</div>
<script src="jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>
</body>
</html>


<div class="container" style="margin-top:20px">
<h2><u>Tambah Mahasiswa</u></h2>
<hr>
<?php
if(isset($_POST['submit'])){
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE
nim='$nim'") or die(mysqli_error($koneksi));
if(mysqli_num_rows($cek) == 0){
$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama,
jenis_kelamin, jurusan) VALUES('$nim', '$nama', '$jenis_kelamin', '$jurusan')") or
die(mysqli_error($koneksi));
if($sql){
echo '<script>alert("Berhasil menambahkan data.");
document.location="tambah.php";</script>';
}else{
echo '<div class="alert alert-warning">Gagal melakukan
proses tambah data.</div>';
}
}else{
echo '<div class="alert alert-warning">Gagal, NIM sudah
terdaftar.</div>';
}
}
?>
<form action="tambah.php" method="post">
<div class="form-group row">
<label class="col-sm-2 col-form-label">NIM</label>
<div class="col-sm-10">
<input type="text" name="nim" class="form-control"
size="4" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">NAMA MAHASISWA</label>
<div class="col-sm-10">
<input type="text" name="nama" class="form-control"
required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
<div class="col-sm-10">
<div class="form-check">
<input type="radio" class="form-check-input"
name="jenis_kelamin" value="LAKI-LAKI" required>
<label class="form-check-label">LAKI-LAKI</label>
</div>
<div class="form-check">
<input type="radio" class="form-check-input"
name="jenis_kelamin" value="PEREMPUAN" required>
<label class="form-checklabel">
PEREMPUAN</label>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">JURUSAN</label>
<div class="col-sm-10">
<select name="jurusan" class="form-control" required>
<option value="">PILIH JURUSAN</option>
<option value="TEKNIK INFORMATIKA">TEKNIK
INFORMATIKA</option>
<option value="TEKNIK SIPIL">TEKNIK SIPIL</option>
<option value="PERTANIAN">PERTANIAN</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">&nbsp;</label>
<div class="col-sm-10">
<input type="submit" name="submit" class="btn btnprimary"
value="SIMPAN">

</div>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>






                              
                              
                                   <figcaption>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section> 


    <!--  TEAM  -->
 <!--
    <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row"> 
                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Nate Baston</h3>
                                        <p>General Principal</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Jason Stewart</h3>
                                        <p>Pregnancy</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Miasha Nakahara</h3>
                                        <p>Cardiology</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-twitter"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


      NEWS 
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE 
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB 
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>March 08, 2018</span>
                                   <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                                   <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jeremie Carlson</h5>
                                             <p>CEO / Founder</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB 
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="images/news-image2.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>February 20, 2018</span>
                                   <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                                   <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jason Stewart</h5>
                                             <p>General Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB 
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="images/news-image3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>January 27, 2018</span>
                                   <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                                   <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Andrio Abero</h5>
                                             <p>Online Advertising</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT 
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE 
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Department</label>
                                        <select class="form-control">
                                             <option>General Health</option>
                                             <option>Cardiology</option>
                                             <option>Dental</option>
                                             <option>Medical Research</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- GOOGLE MAP 
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>           


     <!-- FOOTER 
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Amazing Technology</h5></a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>New Healing Process</h5></a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Your Company 
                                   
                                   | Design: Tooplate</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>