<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
  <title>Deskripsi Pekerjaan || Talent Recruiter</title>
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

<?php        
  require ("koneksi.php");            
  $sql = mysqli_query($koneksi, "SELECT * FROM role_job ORDER BY id_role ASC");
?>

    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="padding-top:10px; padding-left: 10px; padding-right: 10px;">
                    <img src="assets/assets/img/webdev.jpg" alt="Card image" >
                    <h4>Web Developer</h4>
                    <p style="text-align: justify;">Web Developer adalah Pengembang Web yang bekerja untuk merancang, membuat, dan memelihara situs web dan aplikasi web. Jadi bisa diartikan pengembang web adalah seseorang yang berhubungan dengan pembuatan suatu website.</p>
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        More
                      </button>
                  <br>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="padding-top:10px; padding-left: 10px; padding-right: 10px;">
                    <img src="assets/assets/img/mob.jpg" alt="Card image">
                    <h4>Mobile Developer</h4>
                    <p style="text-align: justify;">Mobile app developer adalah para programmer yang membangun produk berupa aplikasi berbasis mobile. Pekerjaan yang mereka lakukan didasarkan pada ide-ide desain serta penerapan rekayasa perangkat lunak.</p>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        More
                      </button>
                    <br>
                </div>
            </div>
        </div>
      </div>
      <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="padding-top:10px; padding-left: 10px; padding-right: 10px;">
                    <img src="assets/assets/img/ui.jpg" alt="Card image">
                    <h4>UI UX Designer</h4>
                    <p style="text-align: justify;">User Interface (UI) dan User Experience (UX) merupakan komponen yang penting bagi sebuah website, aplikasi, maupun platform online lainnya. UI/UX dapat menjadi salah satu faktor penentu bagi pengunjung agar tertarik untuk mengeksplorasi sebuah platform.</p>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        More
                      </button>
                    <br>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="padding-top:10px; padding-left: 10px; padding-right: 10px;">
                    <img src="assets/assets/img/dba.jpg" alt="Card image">
                    <h4>Database Administrator</h4>
                    <p style="text-align: justify;">Database administrator (DBA) adalah  seorang admin dalam pengelolaan sistem komputer bekerja secara khusus untuk melakukan perawatan (Maintenace) ruang lingkup database serta mengarahkan semua kegiatan keamanan data. </p>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        More
                      </button>
                    <br>
                </div>
            </div>
        </div>
      </div>
      <br><br><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Web Developer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Deskripsi Pekerjaan</h5>
        <p style="text-align: justify;">Bekerja dengan anggota tim untuk mengembangkan produk. <br> Berkontribusi pada aplikasi Frontend atau Backend. <br> Menganalisis sistem saat ini dan memberikan rekomendasi yang diperlukan untuk perubahan sistem. <br> Jelajahi teknologi baru yang tersedia saat ini di pasar untuk diterapkan di perusahaan.</p>
        <h5>Tanggung Jawab</h5>
        <p style="text-align: justify;">Bertanggung jawab untuk membangun dan memberikan pengalaman terbaik pada pengunjung sebuah situs. <br> Mengatur pembuatan tata letak halaman, gaya dari isi di dalam situs, dan juga interaktif.</p>
        <h5>Keahlian</h5>
        <p style="text-align: justify;">Setidaknya 2 Tahun pengalaman kerja di bidang terkait diperlukan untuk posisi ini. <br> Kandidat harus memiliki setidaknya Diploma, Gelar Sarjana di Ilmu Komputer/Teknologi Informasi atau setara. <br> Keterampilan komunikasi tertulis dan verbal yang sangat baik. <br> Familiar dengan GIT adalah nilai tambah. <br> Melakukan development backend (PHP) dan REST API sesuai dengan task yang diberikan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mobile Developer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Deskripsi Pekerjaan</h5>
        <p style="text-align: justify;">Berkolaborasi dengan tim untuk menentukan, mendesain, dan membuat fitur baru.</p>
        <h5>Tanggung Jawab</h5>
        <p style="text-align: justify;">Merancang dan membangun aplikasi untuk platform seluler. <br> Buat desain dan bangun aplikasi Mobile berdasarkan kebutuhan. <br> Memperbaiki bug secara aktif dan meningkatkan aplikasi untuk kinerja yang lebih baik. <br> </p>
        <h5>Keahlian</h5>
        <p style="text-align: justify;">Setidaknya 1 tahun pengalaman dalam Mobile Developer <br> Pengalaman mengembangkan aplikasi Android / iOS menggunakan Flutter. <br> Pengalaman di REST API dengan Lumen (PHP). <br> Familiar dengan library adalah nilai tambah</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UI/UX Designer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Deskripsi Pekerjaan</h5>
        <p style="text-align: justify;">UI Designer merupakan sebutan untuk orang yang mendesain interface untuk perangkat lunak komputer, ponsel pintar, dan lainnya. <br> UX Designer adalah jenis pekerjaan yang berhubungan dengan bagaimana meningkatkan kepuasan pengguna aplikasi maupun pengunjung situs yang dilihat dari nilai guna, manfaat, juga kesenangan yang didapatkan si pengguna dari suatu aplikasi atau situs.</p>
        <h5>Tanggung Jawab</h5>
        <p style="text-align: justify;">Memastikan bahwa setiap langkah penggunaan aplikasi atau website logis dan jelas. <br> Suatu produk yang diciptakan terlihat seperti apa yang dapat dilihat oleh mata. <br> Menampilkan interface yang memiliki keseragaman baik dari segi warna, layout, atau font.</p>
        <h5>Keahlian</h5>
        <p style="text-align: justify;">Menunjukkan kemahiran dalam desain UI/UX, development, testing, debug, integrasi, delivery. <br> Pengetahuan mendasar soal desain. <br> Familiar menggunakan software desain (Figma, Adobe XD, dll). <br> Membuat mockup dan prototipe UI. <br> Punya passion dalam merancang produk digital</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Database Administrator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Deskripsi Pekerjaan</h5>
        <h5>Tanggung Jawab</h5>
        <h5>Keahlian</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>