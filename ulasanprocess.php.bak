<?php
	include "koneksi.php";
	date_default_timezone_set("Asia/Bangkok");
	$ulasan = $_REQUEST['ulasan'];
	$rate = $_REQUEST['rate'];
	$trid = $_REQUEST['transactionid'];
	$ulasanid = date("iHs").'-'.$trid;
	
	$query = "INSERT into ulasan VALUES ('$ulasanid', '$trid', '$ulasan', '$rate')";
	$run = mysqli_query($con, $query);
	$username = "SELECT usernamecustomer FROM transactionheader WHERE transactionid = '$trid'";
	$cek = mysqli_query($con, $username);
	$row = mysqli_fetch_array($cek);
	
	#echo $row[0];
	header("Location: ulasanberhasil.php?userr=$row[0]&trid=$trid");
	
?>