<?php
	include"koneksi.php";
	date_default_timezone_set("Asia/Bangkok");
	
	$jenisperangkat = $_REQUEST['jenisperangkat'];
	$merkperangkat = $_REQUEST['merkperangkat'];
	$seriperangkat = $_REQUEST['seriperangkat'];
	$deskripsimasalah = $_REQUEST['deskripsimasalah'];
	$tanggalpemesanan = $_REQUEST['tanggalpemesanan'];
	$waktupemesanan = $_REQUEST['waktupemesanan'];
	$usernamecustomer = $_REQUEST['usernamecustomer'];
	$usernametoko = $_REQUEST['usernametoko'];
	$transactionid = date("iHs").'-'.$usernamecustomer;
	
	$namagambar = $_FILES['gambar']['name'];
	$path = $_FILES['gambar']['tmp_name'];
	
	move_uploaded_file($path, 'images/'.$namagambar);
	#$query = "INSERT INTO tesgambar VALUES ('$namagambar')";
	#$hasilinput = mysqli_query($con, $query);
	
	if ($jenisperangkat == "" || $merkperangkat == "" || $seriperangkat =="" || $deskripsimasalah == "" || $tanggalpemesanan == "" || $waktupemesanan == "" || $namagambar == ""){
		echo "<script type = 'text/javascript'> 
							alert('MOHON ISI SEMUA DATA YANG DIPERLUKAN');
							window.location = 'bookingform.php?tokoo=$usernametoko&userr=$usernamecustomer';
					</script>";
	}
	else{
		$query = "INSERT INTO transactionheader VALUES ('$transactionid', '$usernamecustomer', '$usernametoko', '$jenisperangkat', '$merkperangkat', '$seriperangkat', '$deskripsimasalah', '$tanggalpemesanan', '$waktupemesanan', 'Menunggu Konfirmasi', 0, 0, '$namagambar')";
    $hasilinput = mysqli_query($con, $query);
    header("Location: bookingconfirmation.php?userr=$usernamecustomer&trid=$transactionid");
		/*echo "Jenis Perangkat : $jenisperangkat";
		echo "<br>";
		echo "Merk Perangkat : $merkperangkat";
		echo "<br>";
		echo "Seri Perangkat : $seriperangkat";
		echo "<br>";
		echo "Deskripsi masalah : $deskripsimasalah";
		echo "<br>";
		echo "Tanggal Pemesanan : $tanggalpemesanan";
		echo "<br>";
		echo "Waktu Pemesanan : $waktupemesanan";
		echo "<br>";
		echo "Nama Gambar : $namagambar";
		echo "<br>";
		echo "Datetime : $datetime";
		echo "<br>";
		echo "Transaction ID : $transactionid";
		echo "<br>";
		echo "Username Customer : $usernamecustomer";
		echo "<br>";
		echo "Username Toko : $usernametoko";
		echo "<br>";
		echo "Transaction ID : $transactionid";
		echo "<br>";*/
	}
	
?>