
<body style="background-color: #FAEBD7;">

	<center><h2 style="font-family: Century Gothic">Profile</h2></center>
	<form action=" " method="POST" enctype="multipart/form-data">
	<table>
		<ul>
		<tr>
			<td><li><b>Photo</b></li></td>
			<td> <input type="file" name="photo" style="width: 80%; height: 20px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Hobby :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="pilihan[]" value="berenang ">berenang <br>
				<input type="checkbox" name="pilihan[]" value="Membaca ">Membaca 
			</td>
			<td>
				<input type="checkbox" name="pilihan[]" value="Mewarnai">Mewarnai<br>
				<input type="checkbox" name="pilihan[]" value="Futsal">Futsal
			</td>
			<td>
				<input type="checkbox" name="pilihan[]" value="Nari">Nari<br>
				<input type="checkbox" name="pilihan[]" value="Salto sambil kayang">Salto sambil kayang
			</td>
			<td>
				<input type="checkbox" name="pilihan[]" value="Pundungan">Pundungan<br>
				<input type="checkbox" name="pilihan[]" value="Nonton">Nonton
			</td>
			<td>
				<input type="checkbox" name="pilihan[]" value="Ngoding">Ngoding<br>
				<input type="checkbox" name="pilihan[]" value="Gosip">Gosip
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Genre Film :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="genre[]" value="Horror">Horror<br>
				<input type="checkbox" name="genre[]" value="Action">Action 
			</td>
			<td>
				<input type="checkbox" name="genre[]" value="Anime">Anime<br>
				<input type="checkbox" name="genre[]" value="Thriller">Thriller
			</td>
			<td>
				<input type="checkbox" name="genre[]" value="Animasi">Animasi
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Travelling Destination :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="destin[]" value="Bali">Bali<br>
				<input type="checkbox" name="destin[]" value="Raja Ampat">Raja Ampat 
			</td>
			<td>
				<input type="checkbox" name="destin[]" value="Pulau Derawan">Pulau Derawan<br>
				<input type="checkbox" name="destin[]" value="Bangka Belitung">Bangka Belitung
			</td>
			<td>
				<input type="checkbox" name="destin[]" value="Labuan Bajo">Labuan Bajo
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td align="right"><input type="submit" name="submit" value="Submit"></td>
		</tr>	

		</ul>
	</table>

<?php
	if(isset($_POST['submit'])) {
		$hobby = $_POST['pilihan'];
		$genre = $_POST['genre'];
		$destin = $_POST['destin'];
		$foto = $_FILES["photo"]["name"];

		echo "<br><br><br>";
		echo "<hr>";

		$uploaddir = 'gambar/';
    	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

    	echo "<p>";

    	

	?>
	<center>
<table style="width: 20%; height: 10%; border-radius: 10%">
	<tr>
		<td colspan="2" align="center"><h3>Output :</h3></td>
	</tr>	
	<tr>
		<td><b>Hobby</b></td>
		<td align="center">
			<?php
				foreach ($hobby as $a) {
					echo $a."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td><b>Genre</b></td>
		<td align="center">
			<?php
				foreach ($genre as $b) {
					echo $b."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td><b>Destination</b></td>
		<td align="center">
			<?php
				foreach ($destin as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>

	<tr>
		<td>Gambar</td><br>
		<td>
			<?php
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
      				echo "<img src='gambar/$foto' style='width:400px;height:250px'>";	
    			} else {
       				echo "Upload failed";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>


</body>
