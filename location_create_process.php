<?php
error_reporting(0);
	include 'config/connection_db.php';
	$id_location=$_POST['id_location'];
	$title=$_POST['title'];
	$address=$_POST['address'];	
	$longtitude=$_POST['longtitude'];	
	$latitude=$_POST['latitude'];
	$category=$_POST['category'];	
	$description=$_POST['description'];
	if(trim($title) == ""){
		echo "<SCRIPT>alert('title belum Diisi');location.href='location_create.php';</SCRIPT>";
		}else{
		$cekdata="SELECT title from ws_location where title='$title'";
			$ada=mysql_query($cekdata) or die(mysql_error());
			if(mysql_num_rows($ada)>0)
				{ 
					echo "<SCRIPT>alert('Title telah Terdaftar');location.href='location_create.php';</SCRIPT>";
				}
			else
			{
				if (!empty($_FILES["photo"]["tmp_name"]))
				{
					$namafolder="photo/"; //tempat menyimpan file
					$jenis_gambar=$_FILES['photo']['type'];
				if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
				{           
				$photo = $namafolder . basename($_FILES['photo']['name']);       
				if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) 
				{
				   //die("Gambar gagal dikirim");
				   echo('gagal terkirim') or die(mysql_error());
				}
			} 
			else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
			}
		
		mysql_query("INSERT into ws_location(id_location, title, address, longtitude, latitude, category, description, photo)"."values('$id_location', '$title', '$address', '$longtitude', '$latitude', '$category', '$description', '$photo')") or die(mysql_error());
				//header('location:spesifikasi_kamar_form.php');
		echo "<SCRIPT>alert('Data Telah Tersimpan');location.href='location.php';</SCRIPT>";
		}
}
?>