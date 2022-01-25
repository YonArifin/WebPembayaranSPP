<?php

	$koneksi=mysqli_connect("localhost","root","","db_spp");

	if ($koneksi) {
		echo"<script>console.log('Database Telah Konek');</script>";
	}else {
		echo"<script>console.log('Database Tidak Konek');</script>";
	}
	
?>