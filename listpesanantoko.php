<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Beranda</title>

</head>

<body>
    <!-- CSS -->
    <style>
        .backgrondd {
            background: #146c94;
            background: -webkit-linear-gradient(to right, rgba(20, 108, 148, 0.7), rgba(25, 167, 206, 0.7));
            background: linear-gradient(to right, rgba(20, 108, 148, 0.7), rgba(25, 167, 206, 0.7))
        }

        .flex-container {
            display: flex;
        }

        .flex-container>div {
            margin-right: 50px;
        }

        .container img{
            max-width: 200px;
            max-height: 200px;
        }

        img {
            max-width: 200px;
            max-height: 200px;
        }

        .Lihat_Detail {
            position: absolute;
            right: -30px;
        }
        
        a{
					text-decoration: underline;
					color:black;
				}
				
				.footer-bottom{
      height: 80px;
      background-color: #212529;
    }

    .footer-bottom p{
      font-family: Roboto;
      font-size: 25px;
      color: white;
      text-align: center;
      vertical-align: middle;
      line-height: 80px;  
    }
        
    </style>
    <!-- Css End -->

    <!-- Navbarnya  -->
    <?php
     	include "koneksi.php";
     	$username = $_REQUEST['userr'];
     ?>
    <nav class="navbar navbar-expand-sm navbar-light bg-dark" data-bs-theme="dark">
        <div class="container">
            <img src="Logo.png" alt="">
          <!-- <a class="navbar-brand " href="#">Service4U</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=listpesanantoko.php?userr=<?php echo $username ?>>Pesanan</a>
              </li>
              <li class="nav-item">
                
              
      </nav>
    <!-- Navbar End -->	

    <div class="pb-5"></div>
    <div class="pb-4"></div>

		<?php
		include "koneksi.php";
		$username = $_REQUEST['userr'];
		$pesanan = "SELECT * FROM transactionheader WHERE usernametoko = '$username'";
		$cekpesanan = mysqli_query($con, $pesanan);
		
		while($row = mysqli_fetch_array($cekpesanan)){
    #<!-- Produk 1 Start -->
    echo"
    <div class='col d-flex justify-content-center'>
        <div class='card mb-3' style='width: 650px;'>
            <div class='fixed-center'></div>
            <div class='row g-0'>
                <div class='col-md-4'>
                    <div class='pb-2'></div>
                    <img src='images/$row[12]' alt='...'>
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row[4] $row[5]</h5>
                        <p class='card-text'>$row[2]</p>
                        <p class='card-text'>Status Pesanan : <b>$row[9]</b> </p>
                        <div class='flex-container'>
                            <div class='Lihat_Detail'>
                                <button class='btn btn-outline-dark'><a href = tracking.php?userr=$username&trid=$row[0]>Lihat Detail</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
 		};
		?>
    <!-- Produk 1 End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    </div>
    </section>
    </div>
</body>

</html>