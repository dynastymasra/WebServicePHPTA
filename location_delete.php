<?php
include 'config/connection_db.php';
$id_location=$_GET['id_location'];
if (trim($id_location)<>"") {
	if (trim($id_location)=="") {
		echo "Tidak ada data yang mau dihapus";
	}
	else{
		$delete = "DELETE FROM ws_location WHERE id_location='$id_location'";
		$delete = mysql_query($delete) or die("Gagal query".mysql_error());

		if (!$delete) {
			echo "Hapus data berhasil";
			exit();
		}
		header('location:location.php');
	}
}

?>