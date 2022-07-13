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
<script>
		function getSelectedValue(){
			var SelectedValue = document.getElementById("list").value;
			document.getElementById("city").innerHTML = SelectedValue;
			document.getElementById("nama").innerHTML = SelectedValue;
			console.log(SelectedValue);
		}

</script>
<body>
		<div class="card">
			<select id="list" onchange="getSelectedValue()">
			<option value="">pilih</option>
				<option value="<?php echo $id_user=1?>">1</option>
				<option value="<?php echo $id_user=2?>">2</option>
			</select>
    </div>

		<h5 id="city">
			Kota
		</h5>
		<h5 id="nama">
			Nama
		</h5>
</body>
</html>