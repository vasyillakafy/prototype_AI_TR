<?php
require ("koneksi.php");

session_start();
if(!isset($_SESSION['id'])){
  $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini!';
  header('Location: login.php');
}

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
      <select class="form-select">
        <option>Pilih Salah Satu Role</option>
        <option>UI/UX Designer</option>
        <option>Web Developer</option>
        <option>Mobile Developer</option>
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
            We are looking for a dynamic UI/UX designer who will be responsible for the user experience (UX) and user interface (UI) design of our mobile app/web. You will ensure that all elements of the online user experience are optimized for improved usability, usefulness, and exceptional visual design.
            <br><br>
            The successful candidate will evidence a passion for delivering adaptive and creative solutions to UI/UX design problems by staying up to date with best practices and emerging trends in user experience design and user interface technology.
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
            <ul>
              <li>Investigating user experience design requirements for our suite of digital assets (mobile app/web). </li>
              <li>Developing and conceptualizing a comprehensive UI/UX design strategy for the mobile app.
                  Producing high-quality UX design solutions through wireframes, visual and graphic designs, flow diagrams, storyboards, site maps, and prototypes. </li>
              <li>Designing UI elements and tools such as navigation menus, search boxes, tabs, and widgets for our digital assets.
                  Testing UI elements such as CTAs, banners, page layouts, page designs, page flows, and target links for landing pages. </li>
              <li>Collaborating with the marketing team, and internal and external designers to ensure the creation and delivery of tailored experiences for the digital user.
                  Providing advice and guidance on the implementation of UX research methodologies and testing activities in order to analyze and predict user behavior. </li>
              <li> Adhering to style standards on typography and graphic design. </li>
            </ul>
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
            <ul>
              <li>Minimum of 5 years UI/UX design experience for digital products or services. </li>
              <li>A portfolio of professional UI/UX design work for both web and mobile platforms. </li>
              <li>Working knowledge of the following technologies and software: Sketch, InVision, Visio, HTML, CSS (SCSS), iOS, Android, Design Systems, and Adobe Creative Suite. </li>
              <li>A team player but can work independently too. </li>
              <li>Excellent written and verbal communication skills. </li>
              <li>Multi-tasking and time-management skills, with the ability to prioritize tasks.
              Can join ASAP </li>
            </ul>
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
</html>