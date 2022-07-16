<?php
require ('koneksi.php');
session_start();

//session
$sesID = $_SESSION['id'];
$sesName = $_SESSION['nama'];
$sesImg = $_SESSION['foto'];
$path = 'assets/assets/img/';

    $query = "SELECT * FROM user WHERE id_user='$sesID'";
    $result = mysqli_query($koneksi, $query) or die (mysql_error());
    while ($row = mysqli_fetch_array($result)){
        $id_user = $row['id_user'];
        $nama = $row['nama'];
        $linkedin = $row['linkedin'];
        $nohp = $row['nohp'];
        $email = $row['email'];
        $password = $row['password'];
        $city = $row['city'];
        $bio = $row['bio'];
        $foto = $row['foto'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Profil Anda || Talent Recruiter</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light" style="padding-left: 60px; padding-right: 60px;">
    <div class="container-fluid ">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" style="color: black; padding-right: 20px;" href="#"><h5>AI BASE TALENT RECRUITER</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="index.php">Cari Pelamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="deskripsi.php">Deskripsi Pekerjaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="profil.php">Profile Anda</a>
        </li>
      </ul>
        <a href="logout.php"><button type="button" class="btn btn-outline-primary">Keluar</button></a>
    </div>
  </nav>
	<div class="container-fluid" style="padding-left:100px; padding-right:100px; padding-top: 10px;">
		<div class="row">
			<div class="col-sm-3">
				<div class="container" style="padding-top: 30px; 
																			display: flex;
																			flex-direction: column;
																			justify-content: center;
																			align-items: center;">
					<img src="<?php echo $path.$foto;?>" class="card-img-top" alt="avatar" 
					style="border-radius:115px; width: 230px; height: 230px; ">
				</div>
			</div>
			<div class="col-sm-7">
				<div class="container" style="padding-top: 30px; padding-left: 30px;">
					<h2><?php echo $nama;?></h2>
					<h6 style="color: #8b8b8b;"><?php echo $nohp;?> &nbsp;&nbsp;| &nbsp;&nbsp;<i class="bi bi-geo-alt"></i><?php echo $city;?></h6>&nbsp;
					<p style="text-align: justify;"><?php echo $bio;?></p>
						<input type="image" src="assets\assets\img\icons8-mail-40.png" width="30" height="30"> &nbsp;
						<a href="https://<?php echo $linkedin;?>"><input type="image" src="assets\assets\img\icons8-linkedin-40.png" width="30" height="30"></a>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="container" style="padding-top: 30px;
																			display: flex;
																			flex-direction: column;
																			justify-content: left;
																			align-items: left;">
					<button type="button" class="btn btn-outline-dark" style="border-radius:10px;">Edit Profile  </button><br>
				</div>
			</div>
		</div>
	</div><hr/>
  <div class="container">
    &nbsp;<h3> Pengalaman Kerja</h3>
      &nbsp;<h5>Software Engineer Manager - Tokopedia</h6>
        <p>2014 - 2018</p>
        <p style="text-align: justify;">
          <ul>
            <li>Bekerja dengan 3 orang <i>Project Manager</i> untuk melakukan <i>brainstorm</i> dan mengembangkan<i> payment detail page</i> dalam Web Aplication menggunakan JavaScript.</li>
            <li>Melakukan <i>Software Testing</i> menggunakan <i>User Acceptance Testing</i> (UAT), melakukan <i>bug fixing</i> dan dokumentasi untuk meningkatkan efisiensi sebesar 20%</li>
          </ul>
        </p>&nbsp;
      &nbsp;<h5>Talent Axquisition Specialist - TPS Food</h6>
        <p>2018 - 2021</p>
        <p style="text-align: justify;">
          <ul>
            <li>Mengelola seluruh proses rekrutment, mulai dari inisiasi permintaan, mengoordinasikan wawancara hingga penerimaan penawaran dan penempatan. Berhasil merekrut 35 orang dalam tenor kerja 3 tahun.</li>
          </ul>
        </p>&nbsp;
        &nbsp;<h5>HRD Manager - Kino Indonesia</h6>
        <p>2021 - Now</p>
        <p style="text-align: justify;">
          <ul>
            <li>Mempertahankan staf organisasi dengan menetapkan program perekrutan, konseling manajer tentang pemilihan kandidat dan pengelolaan tim, melakukan dan menganalisis <i>exit interview</i> yang secara signifikan mengurangi pergantian staf dari 5% menjadi 1%</li>
          </ul>
        </p>&nbsp;
  </div><br><br>
</body>
</html>