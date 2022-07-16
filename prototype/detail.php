<?php

require ("koneksi.php");

session_start();

//session
// $sesID = $_SESSION['id'];
// $sesName = $_SESSION['username'];
// $sesLvl = $_SESSION['role'];
// $sesImg = $_SESSION['foto'];
$path = 'assets/assets/img/';

    $id = $_GET['id'];
    $query = "SELECT * FROM pelamar WHERE id_pelamar='$id'";
    $result = mysqli_query($koneksi, $query) or die (mysql_error());
    $no = 1;

    //menampilkan data pada database menggunakan array
    while ($row = mysqli_fetch_array($result)) {
      $id_pelamar = $row['id_pelamar'];
      $id_role = $row['id_role'];
      $nama = $row['nama'];
      $alamat = $row['alamat'];
      $linkedin = $row['linkedin'];
      $skor = $row['skor'];
      $bio = $row['bio'];
      $pengalaman1 = $row['pengalaman1'];
      $deskripsi1 = $row['deskripsi1'];
      $lamakerja1 = $row['lamakerja1'];
      $durasi1 = $row['durasi1'];
      $lokasi1 = $row['lokasi1'];
      $pengalaman2 = $row['pengalaman2'];
      $deskripsi2 = $row['deskripsi2'];
      $lamakerja2 = $row['lamakerja2'];
      $durasi2 = $row['durasi2'];
      $lokasi2 = $row['lokasi2'];
      $pengalaman3 = $row['pengalaman3'];
      $dekripsi3 = $row['dekripsi3'];
      $lamakerja3 = $row['lamakerja3'];
      $durasi3 = $row['durasi3'];
      $lokasi3 = $row['lokasi3'];
      $foto = $row['foto']; 
      $intoleran = $row['intoleran'];    

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AI Talent Recruiter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="detail.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

<div class="container isi">
  <div class="row">
    <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
      <img src="<?php echo $path.$foto;?>" class="card-img-top">
      <div class="card-body">
        <h3 class="card-text"><?php echo $nama;?></h3>
        <h6 class="card-text"><?php echo $bio;?></h6>
        <p class="card-text"><i class="bi bi-geo-alt"></i> <?php echo $alamat;?> </p>
      </div>
    </div>
    </div>
    <div class="col-sm-4">
      <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Identitas Diri
  </button>
  <button type="button" class="list-group-item list-group-item-action"> <i class="bi bi-linkedin"></i> LinkedIn </button>
  <button type="button" class="list-group-item list-group-item-action"><i class="bi bi-twitter"></i> Twitter </button>
  <button type="button" class="list-group-item list-group-item-action"> <i class="bi bi-instagram"></i> Instagram </button>
  <button type="button" class="list-group-item list-group-item-action"><i class="bi bi-google"></i> Google Mail </button>
    <button type="button" class="list-group-item list-group-item-action"><i class="bi bi-youtube"></i> Youtube </button>
    <button type="button" class="list-group-item list-group-item-action"><i class="bi bi-github"></i> Github </button>
     <button type="button" class="list-group-item list-group-item-action"><i class="bi bi-whatsapp"></i> Whatsapp </button>
</div>
    </div>
    <div class="col-sm-4">
      <div class="p-3 mb-2 bg-primary text-white text-center">
        <h1> <?php echo $skor;?> </h1>
        <h3> Score </h3>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $pengalaman1;?> </h5>
      <small><?php echo $lamakerja1;?> </small>
    </div>
    <p class="mb-1"><?php echo $deskripsi1;?> </p>
    <small> <?php echo $durasi1;?>  </small><br>
    <small> <?php echo $lokasi1;?>  </small>
  </a>
  <a href="#" class="list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"><?php echo $pengalaman2;?> </h5>
      <small><?php echo $lamakerja2;?> </small>
    </div>
    <p class="mb-1"><?php echo $deskripsi2;?> </p>
    <small> <?php echo $durasi2;?>  </small><br>
    <small> <?php echo $lokasi2;?>  </small>
  </a>
  <a href="#" class="list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"><?php echo $pengalaman3;?> </h5>
      <small><?php echo $lamakerja3;?> </small>
    </div>
    <p class="mb-1"><?php echo $dekripsi3;?> </p>
    <small> <?php echo $durasi3;?>  </small><br>
    <small> <?php echo $lokasi3;?>  </small>
  </a>
</div>
    </div>
    <div class="col-sm-4">
      <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center active">
    Keahlian
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Mobile Interface Design
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Video Editing
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Graphic Design
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Web Design
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Project Management
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  User Experience Design (UED)
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  User Interface Prototyping
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Analisis Sentimen</li>
        <li class="list-group-item">
          <canvas id="myChart" width="auto" height="150"></canvas>
        </li>
      </ul>
    </div>
    <div class="col">
       <div class="p-3 mb-2 bg-warning text-white text-center">
        <h1> <?php echo $intoleran;?> </h1>
        <h3> Intolerant Score </h3>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<div class="container">
  <div class="row">
    <div class="col">
      <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Analisis Ketertarikan</li>

  <li class="list-group-item d-flex justify-content-between align-items-center">
    Travelling
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Art
    <span class="badge bg-primary rounded-pill">8</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Musik
    <span class="badge bg-primary rounded-pill">5</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Sport
    <span class="badge bg-primary rounded-pill">3</span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Game
    <span class="badge bg-primary rounded-pill">3</span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Cooking
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Beauty
    <span class="badge bg-primary rounded-pill">0</span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Social
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>
    </div>
    <div class="col">
      <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Analisis Kepribadian </li>
  <li class="list-group-item">
    Opennes
           <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
Conscientiousness
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
Extraversion
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
Agreeableness
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
Neuroticism
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  </li>
</ul>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    &copy; Copyright 2022
  </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulir Registrasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Twitter" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Google Mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@gmail.com</span>
</div>

<label for="basic-url" class="form-label">Akun Linked In</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">https://linkedin.com/</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
  <select class="form-select" aria-label="Default select example">
  <option selected>Pilih salah satu role</option>
  <option value="1">UI / UX Designer</option>
  <option value="2">UI Designer</option>
  <option value="3">UX Designer</option>
</select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Negative', 'Positive'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>