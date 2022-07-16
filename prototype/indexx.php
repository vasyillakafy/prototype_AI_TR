<?php
require ("koneksi.php");

// if(!isset($_SESSION['id'])){
//   $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini!';
//   header('Location: login.php');
// }

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

<?php                    
  $sql = mysqli_query($koneksi, "SELECT * FROM role ORDER BY id_role ASC");
?>

  <h2>Pencarian Pelamar Pekerjaan</h2>
  <div class="container mt-3">
    <div class="card">
      <select id="list" name="list" onchange="getSelectedValue()" class="form-select">
        <option value="4">Pilih Salah Satu Role</option>
        <?php                       
          while($role = mysqli_fetch_assoc($sql)){ 
            echo '<option value="'.$role['id_role'].'">'.$role['role'].'</option>';
          }                        
        ?>
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
            <h6 id="deskripsi">
              Deskripsi Pekerjaan dari Role
            </h6>
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
            <h6 id="tanggungj">
              Tanggung Jawab dari Role
            </h6>
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
            <h6 id="keahlian">
              Keahlian yang dibutuhkan dari Role
            </h6>
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
            <td>Mahardika</td>
            <td><span class="badge bg-primary">95</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Syarif Hidayatulloh</td>
            <td><span class="badge bg-primary">93</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
           <tr>
            <th scope="row">3</th>
            <td>Siti Noraika</td>
            <td><span class="badge bg-primary">90</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
             <tr>
            <th scope="row">4</th>
            <td>Dalih Rusmana</td>
            <td><span class="badge bg-primary">88</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Ardi Winata Nurriza</td>
            <td><span class="badge bg-primary">83</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
           <tr>
            <th scope="row">6</th>
            <td>Afri Mimo</td>
            <td><span class="badge bg-warning">60</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
      
          <tr>
            <th scope="row">7</th>
            <td>Alif Syaiful Huda</td>
            <td><span class="badge bg-warning">50</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Riski Ardiansyah</td>
            <td><span class="badge bg-danger">40</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
           <tr>
            <th scope="row">9</th>
            <td>Arjuntoro Ardhy Ferdian</td>
            <td><span class="badge bg-danger">30</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Aditiya Andi Winata</td>
            <td><span class="badge bg-danger">25</span></td>
            <td><a href="detail.php"><button type="button" class="btn btn-primary">Detail</button> </a></td>
          </tr>
        </tbody>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
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
      if (SelectedValue=="1")
        {
            document.getElementById("deskripsi").innerHTML="Profesi UI/UX Designer bertugas mengurus User Interface, dan User Experience dengan memaksimalkan pengalaman pengguna dalam menggunakan suatu aplikasi atau website. User Experience Design atau biasa disebut juga dengan UX Design merupakan proses meningkatkan kepuasan pengguna dalam membuat sebuah website atau aplikasi yang lebih mudah dan nyaman digunakan."
            document.getElementById("tanggungj").innerHTML="Tanggung jawab seorang UX designer sendiri memastikan bahwa setiap langkah penggunaan aplikasi atau website logis dan jelas. <br> Sementara UI adalah tentang bagaimana suatu produk yang diciptakan terlihat seperti apa yang dapat dilihat oleh mata. <br> Tujuan utama dari UI sendiri menampilkan interface yang memiliki keseragaman baik dari segi warna, layout, atau font.";
            document.getElementById("keahlian").innerHTML="Menunjukkan kemahiran dalam desain UI/UX, development, testing, debug, integrasi, delivery. <br> Pengetahuan mendasar soal desain. <br> Familiar menggunakan software desain (Figma, Adobe XD, dll). <br> Membuat mockup dan prototipe UI. <br> Punya passion dalam merancang produk digital";
        }
      else if (SelectedValue=="2")
        {
            document.getElementById("deskripsi").innerHTML="Bekerja dengan anggota tim untuk mengembangkan produk. <br> Berkontribusi pada aplikasi Frontend atau Backend. <br> Menganalisis sistem saat ini dan memberikan rekomendasi yang diperlukan untuk perubahan sistem. <br> Jelajahi teknologi baru yang tersedia saat ini di pasar untuk diterapkan di perusahaan.";
            document.getElementById("tanggungj").innerHTML="Bertanggung jawab untuk membangun dan memberikan pengalaman terbaik pada pengunjung sebuah situs. <br> Mengatur pembuatan tata letak halaman, gaya dari isi di dalam situs, dan juga interaktif. ";
            document.getElementById("keahlian").innerHTML="Setidaknya 2 Tahun pengalaman kerja di bidang terkait diperlukan untuk posisi ini. <br> Kandidat harus memiliki setidaknya Diploma, Gelar Sarjana di Ilmu Komputer/Teknologi Informasi atau setara. <br> Keterampilan komunikasi tertulis dan verbal yang sangat baik. <br> Familiar dengan GIT adalah nilai tambah. <br> Melakukan development backend (PHP) dan REST API sesuai dengan task yang diberikan.";
        }
      else if (SelectedValue=="3")
        {
            document.getElementById("deskripsi").innerHTML="Berkolaborasi dengan tim untuk menentukan, mendesain, dan membuat fitur baru.";
            document.getElementById("tanggungj").innerHTML="Merancang dan membangun aplikasi untuk platform seluler. <br> Buat desain dan bangun aplikasi Mobile berdasarkan kebutuhan. <br> Memperbaiki bug secara aktif dan meningkatkan aplikasi untuk kinerja yang lebih baik. <br> ";
            document.getElementById("keahlian").innerHTML="Setidaknya 1 tahun pengalaman dalam Mobile Developer <br> Pengalaman mengembangkan aplikasi Android / iOS menggunakan Flutter. <br> Pengalaman di REST API dengan Lumen (PHP). <br> Familiar dengan library adalah nilai tambah";
        } 
      else {
            document.getElementById("deskripsi").innerHTML="Deskripsi Pekerjaan dari Role";
            document.getElementById("tanggungj").innerHTML="Tanggung Jawab dari Role";
            document.getElementById("keahlian").innerHTML="Keahlian yang dibutuhkan dari Role";
      }
		}
</script>
</html>