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
    a{
			text-decoration: underline;
			color:black;
		}
		
		.container img {
            max-width: 200px;
            max-height: 200px;
    }
    
    footer{
        margin-top: auto;
        background-color: #212529;
    }
    footer p{
        font-family: Roboto;
        font-size: 25px;
        color: white;
        text-align: center;
        vertical-align: middle;
        line-height: 100px;
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
                <a class="nav-link active" aria-current="page" href=listpesananuserdantoko.php?userr=<?php echo $username ?>>Pesanan</a>
              </li>
              
              
      </nav>
    <!-- Navbar End -->

    <!-- Content -->

    <div class="pb-5"></div>

    <div class="col d-flex justify-content-center fw-bold ms-auto">Lokasi servis di dekat anda</div>


    <div class="pb-4"></div>
    <!-- Content Ends -->
    <?php
    include "koneksi.php";
    
    $username = $_REQUEST['userr'];
    $cektoko = "SELECT * from toko";
    $hasilcek = mysqli_query($con, $cektoko);
    #$hitungtoko = mysqli_num_rows($hasilcek);
    #echo "ADA SEBANYAK $hitungtoko toko";
    
    while($row = mysqli_fetch_array($hasilcek)){
		
		
    #<!-- Produk 1 Start -->
    echo "<div class='col d-flex justify-content-center'>
        <div class='card mb-3' style='max-width: 540px;'>
            <div class='fixed-center'></div>
            <div class='row g-0'>
                <div class='col-md-4'>
                    <div class='pb-2'></div>
                    <img src='$row[0].png' class='img-fluid img-thumbnail' alt='...'>
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>
                      <h5 class='card-title'><a href = detailtoko.php?tokoo=$row[0]&userr=$username>$row[3]</a></h5>
                        <p class='card-text'>$row[4]</p>
                        <p class='card-text'>$row[5]</p>
                        
		
                        <div class='pb-1'></div>

                    </div>
                </div>
            </div>
        </div>
    </div>";
		};
		?>
    <!-- Produk 1 End -->

<!--    <div class="pb-3"></div>-->

</body>



</html>