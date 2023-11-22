<?php
	include "koneksi.php";
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
	$cekusername = "SELECT usernamecustomer, passwordcustomer FROM customer WHERE usernamecustomer = '$username' AND passwordcustomer = MD5('$password')";
	$cekdata = mysqli_query($con, $cekusername);
	
	if ($username == "" || $password == ""){
		echo "<script type = 'text/javascript'> 
							alert('MOHON ISI SEMUA DATA YANG DIPERLUKAN');
							window.location = 'login.php';
					</script>";
	}
	else{
		if (mysqli_num_rows($cekdata) == 0){
			echo "<script type = 'text/javascript'> 
								alert('MOHON MASUKKAN USERNAME DAN PASSWORD YANG VALID');
								window.location = 'login.php';
						</script>";
		}
		else{
			#echo "SELAMAT USERNAME DAN PASSWORD SUDAH VALID";
			$updatewaktu = "UPDATE customer SET waktulogin = NOW() WHERE usernamecustomer='$username'";
			$updatee = mysqli_query($con, $updatewaktu);
			header("Location: homeafterlogin.php?userr=$username");
		}
	}
?>