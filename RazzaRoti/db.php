<?php
		include("koneksi.php");
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$sql="insert into orderan(nama,email,phone,subject) values ('$nama','$email','$phone','$subject')";
		mysqli_query($koneksi,$sql) or die (mysqli_error());
		header('location:orderan');
?>