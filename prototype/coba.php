<?php
require ('koneksi.php');

    $query = "SELECT * FROM user";
    $result = mysqli_query($koneksi, $query) or die (mysql_error());
    while ($row = mysqli_fetch_array($result)){
        $id_user = $row['id_user'];
        $nama = $row['nama'];
        $city = $row['city'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
</head>
<?php                    
  $sql = mysqli_query($koneksi, "SELECT * FROM role ORDER BY id_role ASC");
?>
<script>
		function getSelectedValue(){
			var SelectedValue = document.getElementById("list").value;
      if (SelectedValue=="1")
        {
            document.getElementById("desk").innerHTML="Profesi UI/UX Designer bertugas mengurus User Interface, dan User Experience dengan memaksimalkan pengalaman pengguna dalam menggunakan suatu aplikasi atau website. User Experience Design atau biasa disebut juga dengan UX Design merupakan proses meningkatkan kepuasan pengguna dalam membuat sebuah website atau aplikasi yang lebih mudah dan nyaman digunakan."
            document.getElementById("tj").innerHTML="Tanggung jawab seorang UX designer sendiri memastikan bahwa setiap langkah penggunaan aplikasi atau website logis dan jelas. Sementara UI adalah tentang bagaimana suatu produk yang diciptakan terlihat seperti apa yang dapat dilihat oleh mata. Tujuan utama dari UI sendiri menampilkan interface yang memiliki keseragaman baik dari segi warna, layout, atau font.";
            document.getElementById("ke").innerHTML="Pengetahuan mendasar soal desain. Familiar menggunakan software desain (Figma, Adobe XD, dll). Membuat mockup dan prototipe UI. Punya passion dalam merancang produk digital";
        }
      else if (SelectedValue=="2")
        {
            document.getElementById("desk").innerHTML="Ini deskripsi tentang webdev";
            document.getElementById("tj").innerHTML="Ini tanggung Jawab webdev";
            document.getElementById("ke").innerHTML="Ini keahlian yg dibutuhkan oleh webdev";
        }
      else 
        {
          document.getElementById("desk").innerHTML="Ini deskripsi tentang mobile";
            document.getElementById("tj").innerHTML="Ini tanggung Jawab mobile";
            document.getElementById("ke").innerHTML="Ini keahlian yg dibutuhkan oleh mobile";
        }
		}
</script>

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
<body>
		<div class="card">
			<select id="list" name="list" onchange="getSelectedValue()" class="form-select">
        <option>Pilih Salah Satu Role</option>
        <?php                       
          while($role = mysqli_fetch_assoc($sql)){ 
            echo '<option value="'.$role['id_role'].'">'.$role['role'].'</option>';
          }                        
        ?>
      </select>
    </div>

		<h5 id="desk">
			Deskripsi
		</h5>
    <h5 id="tj">
			Tanggung Jawab
		</h5>
    <h5 id="ke">
			Keahlian
		</h5>
</body>
</html>