<?php
require ('koneksi.php');
session_start();

//session
$sesID = $_SESSION['id'];
$sesName = $_SESSION['nama'];
$sesImg = $_SESSION['foto'];
$path = 'assets/img/';

    $query = "SELECT * FROM user WHERE id_user='$sesID'";
    $result = mysqli_query($koneksi, $query) or die (mysql_error());
    while ($row = mysqli_fetch_array($result)){
        $id_user = $row['id_user'];
        $nama = $row['nama'];
        $linkedin = $row['linkedin'];
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
					<h6 style="color: #8b8b8b;">Talent Recruiter &nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $city;?></h6>&nbsp;
					<p style="text-align: justify;"><?php echo $bio;?></p>
						<input type="image" src="assets\img\icons8-mail-40.png" width="30" height="30"> &nbsp;
						<a href="https://<?php echo $linkedin;?>"><input type="image" src="assets\img\icons8-linkedin-40.png" width="30" height="30"></a>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="container" style="padding-top: 30px;
																			display: flex;
																			flex-direction: column;
																			justify-content: left;
																			align-items: left;">
					<button type="button" class="btn btn-outline-dark" style="border-radius:10px;">Edit Profile  </button><br>
					<button type="button" class="btn btn-outline-dark" style="border-radius:10px;">Edit Deskripsi</button>
				</div>
			</div>
		</div>&nbsp;
	</div><hr/>
  <div class="container">
    &nbsp;<h3> CV Panca Prima Surabaya (Primtech)</h3>
    &nbsp;<h5>Deskripsi Pekerjaan</h5>
    <p style="text-align: justify;">We are looking for a dynamic UI/UX designer who will be responsible for the user experience (UX)
      and user interface (UI) design of our mobile app/web. You will ensure that all elements of the online 
      user experience are optimized for improved usability, usefulness, and exceptional visual design.
      The successful candidate will evidence a passion for delivering adaptive and creative solutions 
      to UI/UX design problems by staying up to date with best practices and emerging trends in user 
      experience design and user interface technology.
    </p>&nbsp;
  </div><br><br>
</body>
</html>