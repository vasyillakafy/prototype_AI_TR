<?php
require ("koneksi.php");

// if(!isset($_SESSION['id'])){
//   $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini!';
//   header('Location: login.php');
// }

// session_start();
//session
// $sesID = $_SESSION['id'];
// $sesName = $_SESSION['nama'];
// $sesImg = $_SESSION['foto'];
// $path = 'assets/img/';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Pekerja || Talent Recruiter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
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

<div class="container-fluid mt-3" style=" padding-left: 100px; 
                                          padding-right: 100px;
                                          display: flex;
                                          justify-content: center;
                                          align-items: center;
                                          flex-direction: column;">

  <div class="container">
    <div class="card"><br>
      <h4 class="text-center"> Cari Pelamar Pekerjaan dengan Mudah dan Cepat </h4><br>
      <table class="table table-striped table-hover" id="tabel-data" >
        <thead>
          <tr>
            <th scope="col" width="10%">#</th>
            <th scope="col" width="20%">Foto</th>
            <th scope="col" width="20%">Nama</th>
            <th scope="col" width="20%">Score</th>
            <th scope="col" width="20%">Role</th>
            <th scope="col" width="10%">Detail</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM pelamar Inner Join role_job on pelamar.id_role = role_job.id_role";
          $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
          while ($row = mysqli_fetch_array($result)) {
            $id_pelamar = $row['id_pelamar'];
            $id_role = $row['id_role'];
            $nama = $row['nama'];
            $alamat = $row['alamat'];
            $linkedin = $row['linkedin'];
            $skor = $row['skor'];
            $role = $row['role'];
            $foto = $row['foto'];
            $no = 1;
        
            echo " 
              <tr>
                  <td>" . $no++ . "</td>
                  <td> 
                    <img src='assets/assets/img/" . $foto . "' width='50px' height='50px'> 
                  </td>
                  <td>" . $nama . "</td>
                  <td>" . $skor . "</td>
                  <td>" . $role . "</td>
                  <td>
                    <a href='detail.php?id=".$id_pelamar."'>
                      <input type='button' class='btn btn-primary' value='Detail' name='detail'>
                    </a>
                  </td>
                </tr>";
                $no++;
          }
          
          ?>
        </tbody>
      </table>
      <script>
        $(document).ready(function() {
          $('#tabel-data').DataTable({
            columnDefs: [{
              orderable: false,
              targets: 0
            }],
            order: [
              [3, "dsc"]
            ]
          });
        });
	    </script>     
    </div>
  </div>
  
  <footer>
        <div class="container">
          &copy; Copyright 2022
        </div>
      </footer> 
</div>
</body>
</html>