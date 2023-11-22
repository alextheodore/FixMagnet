<?php
	include"koneksi.php";
	
	$username = $_REQUEST['username'];
	$phone = $_REQUEST['phone'];
	$password = $_REQUEST['password'];
	$terms = $_REQUEST['terms'];
	
	$cek = "SELECT usernamecustomer from customer where usernamecustomer = '$username'";
	$hasilcek = mysqli_query($con, $cek);
	
	if ($username == "" || $phone == "" || $password == "" || $terms != "agree"){
		echo "<script type = 'text/javascript'> 
							alert('MOHON ISI SEMUA DATA YANG DIPERLUKAN');
							window.location = 'register.php';
					</script>";
	}
	else{
		if (mysqli_num_rows($hasilcek) != 0){
			echo "<script type = 'text/javascript'> 
								alert('MOHON MASUKKAN USERNAME YANG LAIN');
								window.location = 'register.php';
						</script>";
		}
		else{
			$insertdata = "INSERT INTO customer (usernamecustomer, passwordcustomer, nomorteleponcustomer) VALUES ('$username', MD5('$password'), '$phone')";
			$masukkan = mysqli_query($con, $insertdata);
			header("Location: login.php");
		}
	}
?>