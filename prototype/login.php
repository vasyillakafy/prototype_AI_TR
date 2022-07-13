<?php
require ('koneksi.php');

//memulai sesi
session_start();

//mengecek apakah variable terisi, dan tidak null
if(isset($_POST['submit']) ){ 
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $id = $row['id_user'];
            $nama = $row['nama'];
            $linkedin = $row['linkedin'];
            $mailVal = $row['email'];
            $passVal = $row['password'];
            $city = $row['city'];
            $bio = $row['bio'];
            $foto = $row['foto'];
        }
        if ($num != 0){
            if($mailVal==$email && $passVal==$pass) {
                $_SESSION['id'] = $id;
                $_SESSION['nama'] = $nama;
                $_SESSION['foto'] = $foto;
                header('Location: index.php');
            } else{
              echo "<script> alert('Password atau Username yang anda masukkan salah!') </script>";
            }
        } else{
            echo "<script> alert('User tidak ditemukan!') </script>";
        }
    } else{
      echo "<script> alert('Data tidak boleh kosong!') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login || Talent Recruiter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style=" padding: 0;
              margin: auto;
              overflow-x: hidden;
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              background: #EEEEEE;">
  <div class="container-fluid mt-3" style=" width: 100%;
                                            gap: 10px;
                                            margin: 10px;
                                            display: grid;
                                            box-shadow: 2px 10px 20px rgba(0,0,0,.1);
                                            border-radius: 20px;
                                            background-color: white;
                                            overflow: hidden;">
    <div class="row">
      <div class="col-sm-7 text-center" style=" padding:20px; background-color: #C6CCF8;">
        <div class="container">
          <img src="assets/svg/loginn.svg" alt="avatar" width="100%">
        </div><br>
        <h4>Cari pekerja dengan cepat dan mudah.</h4>
      </div>
    <div class="col-sm-5" style="display: flex;
                                  justify-content: center;
                                  align-items: center;
                                  flex-direction: column;
                                  padding: 20px;">
      <div class="container">
        <h3>Talent Recruiter(TR)</h3><br><br>
        <h6>Silahkan masuk dengan akun yang telah terdaftar.</h6>
        
        <form action="login.php" method="post">
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            <label for="email">Email</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            <label for="pass">Password</label>
          </div>
          <button type="submit" name="submit" class="btn btn-primary text-white">Masuk</button>
          <br><br><br>
          <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="register.php">Daftar Disini.</a></div>
            
            <div class="p-2">Belum punya akun?</div>
          </div>
              <!-- button:hover {
                background-color: #5876F8;
                transition: .5s;
                background-color: #3B5FF9;
              } -->
        </form>
      </div>
    </div>
    </div>    
  </div>
</body>
</html>
