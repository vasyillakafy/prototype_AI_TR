<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register || Talent Recruiter</title>
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
              height: 100vh;
              align-items: center;
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
    <div class="col-sm-7" style="display: flex;
                                  justify-content: center;
                                  align-items: center;
                                  flex-direction: column;
                                  padding: 40px;">
      <div class="container">
        <h3>Talent Recruiter(TR)</h3><br>
        <form action="login.php" method="post">
          <div class="input-group">
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
          </div><br>
          <div class="input-group">
            <input type="text" class="form-control" id="nohp" placeholder="No. HP" name="nohp">
          </div><br>
          <div class="input-group">
            <span class="input-group-text">https://linkedin.com/</span>
            <input type="text" class="form-control" id="linkedin" placeholder="LinkedIn" name="linkedin">
          </div><br>
          <div class="input-group">
            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            <span class="input-group-text">@gmail.com</span>
          </div><br>
          <div class="input-group">
            <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
          </div><br>
          <br><button type="submit" class="btn btn-primary text-white">Daftar</button>
          <br><br>
          <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="login.php">Masuk.</a></div>
            <div class="p-2">Sudah punya akun?</div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-5 text-center" style=" display: flex;
                                              flex-direction: column;
                                              background-color: #C6CCF8; 
                                              justify-content: center;
                                              align-items: center;">
      <div class="container">
        <img src="assets/assets/svg/regiss.svg" alt="avatar" width="100%">
      </div><br>
      <h4>Buat akun anda untuk mencari pekerja dengan cepat dan mudah.</h4>
    </div>
    </div>    
  </div>
</body>
</html>
