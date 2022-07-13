<?php
require ("koneksi.php");

// if(!isset($_SESSION['id'])){
//   $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini!';
//   header('Location: login.php');
// }

// $id = $_GET['id'];
// $query = "SELECT * FROM role WHERE id_role='$id'";
$query = "SELECT * FROM role";
$result = mysqli_query($koneksi, $query) or die (mysql_error());
while ($row = mysqli_fetch_array($result)){
    $id_role = $row['id_role'];
    $role = $row['role'];
    $deskripsi = $row['deskripsi'];
    $tanggungj = $row['tanggungj'];
    $keahlian = $row['keahlian'];
}

session_start();
//session
$sesID = $_SESSION['id'];
$sesName = $_SESSION['nama'];
$sesImg = $_SESSION['foto'];
$path = 'assets/img/';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Pekerja || Talent Recruiter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

<div class="container-fluid mt-3" style=" padding-left: 100px; 
                                          padding-right: 100px;
                                          display: flex;
                                          justify-content: center;
                                          align-items: center;
                                          flex-direction: column;">

  <h2>Pencarian Pelamar Pekerjaan</h2>
  <div class="container mt-3">
    <div class="card">
      <select id="list" name="list" onchange="getSelectedValue()" class="form-select">
        <option>Pilih Salah Satu Role</option>
        <option value="<?php echo $id_role='1' ?>">UI/UX Designer</option>
        <option value="<?php echo $id_role='2' ?>">Web Developer</option>
        <option value="<?php echo $id_role='3' ?>">Mobile Developer</option>
      </select>
    </div>
  </div>
  <div class="container mt-3">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Deskripsi Pekerjaan
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <h5 id="deskripsi">
              Deskripsi Pekerjaan dari Role
            </h5>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Tanggung Jawab
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <h5 id="tanggungj">
              Tanggung Jawab dari Role
            </h5>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Keahlian
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <h5 id="keahlian">
              Keahlian yang dibutuhkan dari Role
            </h5>
          </div>
        </div>
      </div>
    </div><br>

    <div class="card"><br>
      <h4 class="text-center"> Hasil Perangkingan Pelamar </h4><br>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" width="10%">#</th>
            <th scope="col" width="40%">Nama</th>
            <th scope="col" width="25%">Score</th>
            <th scope="col" width="25%">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td><span class="badge bg-primary">90</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td><span class="badge bg-primary">80</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
           <tr>
            <th scope="row">3</th>
            <td>Mark</td>
            <td><span class="badge bg-primary">70</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
             <tr>
            <th scope="row">4</th>
            <td>Mark</td>
            <td><span class="badge bg-warning">60</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Mark</td>
            <td><span class="badge bg-warning">50</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
           <tr>
            <th scope="row">6</th>
            <td>Mark</td>
            <td><span class="badge bg-warning">40</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
      
          <tr>
            <th scope="row">7</th>
            <td>Mark</td>
            <td><span class="badge bg-danger">30</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Mark</td>
            <td><span class="badge bg-danger">20</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
           <tr>
            <th scope="row">9</th>
            <td>Mark</td>
            <td><span class="badge bg-danger">10</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Mark</td>
            <td><span class="badge bg-danger">0</span></td>
            <td><a href="detail.html"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
        </tbody>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      </div>
      </div>
      
      <footer>
        <div class="container">
          &copy; Copyright 2022
        </div>
      </footer>
      
  </div>
</div>
</body>
<script>
		function getSelectedValue(){
			var SelectedValue = document.getElementById("list").value;
			document.getElementById("deskripsi").innerHTML = SelectedValue;
      document.getElementById("tanggungj").innerHTML = SelectedValue;
      document.getElementById("keahlian").innerHTML = SelectedValue;
			console.log(SelectedValue);
		}
  </script>
</html>