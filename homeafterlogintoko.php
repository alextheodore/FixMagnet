<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Main Seller</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <style>
     *{
       margin : 0;
       padding : 0;
       box-sizing: border-box;
     }

     body{
       font-family:roboto;
     }
    .bordered{ 
       border: solid gray 0.5px;
     }
     
     .container img {
            max-width: 200px;
            max-height: 200px;
    }
     
    </style>
    <!-- Start your project here-->
    <!-- Navbarnya  -->
     <?php
     	include "koneksi.php";
     	$username = $_REQUEST['userr'];
			$ambilnamatoko = "SELECT * from toko WHERE usernametoko = '$username'";
			$cektoko = mysqli_query($con, $ambilnamatoko);
			$row = mysqli_fetch_array($cektoko);
			$ulasan = "SELECT deskripsiulasan, usernamecustomer, nilaiulasan FROM ulasan JOIN transactionheader ON transactionheader.transactionid = ulasan.transactionid WHERE usernametoko = '$username'";
			$cekulasan = mysqli_query($con, $ulasan);
			$rating5 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 5
AND usernametoko = '$username'";
			$cekrating5 = mysqli_query($con, $rating5);
			$jumlahrating5 = mysqli_num_rows($cekrating5);
			$rating4 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 4
AND usernametoko = '$username'";
			$cekrating4 = mysqli_query($con, $rating4);
			$jumlahrating4 = mysqli_num_rows($cekrating4);
			$rating3 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 3
AND usernametoko = '$username'";
			$cekrating3 = mysqli_query($con, $rating3);
			$jumlahrating3 = mysqli_num_rows($cekrating3);
			$rating2 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 2
AND usernametoko = '$username'";
			$cekrating2 = mysqli_query($con, $rating2);
			$jumlahrating2 = mysqli_num_rows($cekrating2);
			$rating1 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 1
AND usernametoko = '$username'";
			$cekrating1 = mysqli_query($con, $rating1);
			$jumlahrating1 = mysqli_num_rows($cekrating1);
			
			$pesanan = "SELECT * FROM transactionheader WHERE usernametoko = '$username'";
			$cekpesanan = mysqli_query($con, $pesanan);
			$jumlahpesanan = mysqli_num_rows($cekpesanan);
			
    	$totalnilai = (5*$jumlahrating5) + (4*$jumlahrating4) + (3*$jumlahrating3) + (2*$jumlahrating2) + (1*$jumlahrating1);
    	$jumlahulasan = $jumlahrating5 + $jumlahrating4 + $jumlahrating3 + $jumlahrating2 + $jumlahrating1;
    	
    	if ($jumlahulasan == 0){
    		$ratarata = 0;
    	}
    	else{
    		$ratarata = $totalnilai / $jumlahulasan;
    	}
    	
	    $biaya = "SELECT SUM(hargajasaadmin + biaya) + 10/100 * SUM(hargajasaadmin + biaya) FROM transactionheader WHERE usernametoko = '$username'";
	    $cekbiaya = mysqli_query($con, $biaya);
	    $row = mysqli_fetch_array($cekbiaya);
    	
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
              
              
      </nav>
    <!-- Navbar End -->
    <!--border atas-->
     <div class="container py-5">
      <div class="row">
       
    <!--desc of shop-->
    <div class="col-md-8" >
    <h4>Welcome back, <?php echo $username ?> !</h4>
      <div class="container py-3 px-0" >
        <div class="card bordered" style = "background-color:#19A7CE; width: 50vw;" >
            <div class="card-body" >
                <div class="row">
                <div class="col-7 py-5">
                    <h2 class="card-title text-white">Good Job!</h2>
                    <small class="card-title text-white">Ayo lanjut pertahankan kompetensi dan kembangkan tokomu lebih lagi agar mantap bersaing !! </small>
                </div>
                <div class="col-5">
                    <img src="undraw_Welcome_re_h3d9-removebg-preview.png" alt="" style="width: 21vw;">
                </div>  
                </div>
            </div>
        </div>
      </div>
    </div>
   
    <!--operational time -->
      <div class="col-md-3 py-5" >
        <div class="container">
      <div class="container px-3">
          <div class="card bordered" style = " background-color:black;width: 25vw;">
            <div class="card-body" >
            <h6 class = "text-white"><b>Performance</b></h6>
            
            <div class="container py-2 px-0 text-white">
            <small >
              Your Progress
            </small>
            
              <div class="card">
                <div class="container px-3 py-3">
                <div class="row">
                  <div class="col-6">
                      <small>Total Income</small>
                  </div>
                  <div class="col-6">
                      <div class = "text" style = "font-size: 15px;"><b>Rp <?php echo number_format($row[0], 2) ?></b></div>
                  </div>
                </div>
                </div>
              </div>
              <br>
              
              <div class="card">
                  <div class="container px-3 py-3">
                  <div class="row">
                    <div class="col-6">
                        <small>Total Transaction</small>
                    </div>
                    <div class="col-6">
                        <div class = "text" style = "font-size: 15px;"><b><?php echo $jumlahpesanan ?></b></div>
                    </div>
                  </div>
                  </div>
                  </div>
            </div>
            </div>
          </div>
      </div>
      </div>
      </div>

      <!--bagian bawah-->
      <div class="container py-5">
      <div class="card w-60 mb-3">

        <div class="container py-3 px-4">
          <h5>Penting hari ini</h5>
          <small class = "text-muted">Aktivitas yang perlu kamu pantau untuk jaga kepuasan pembeli</small>
          
        <div class="row py-3">
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <small class = "text-muted">Total Pesanan</small>
                <h3 class="card-text py-2"><?php echo $jumlahpesanan ?></h3>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <small class = "text-muted">Total Ulasan</small>
                	<h3 class="card-text py-2"><?php echo $jumlahulasan ?></h3>
              </div>
            </div>
          </div>
          
          

          <div class="col-sm-3 text-center">
            <h5>ULASAN PEMBELI</h5>
            <div class="container">
              <div class = "text" style="font-size: 70px;"><?php echo number_format($ratarata, 1) ?>
              <small class = "text-muted" style="font-size: 20px;">/5.0</small>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          	<?php
          	echo"
            <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <strong class = ''>5.0</strong>  
			      <strong class = ''>($jumlahrating5)</strong>  
			      <BR>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <strong class = ''>4.0</strong>  
			      <strong class = ''>($jumlahrating4)</strong>  
			      <BR>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <strong class = ''>3.0</strong>  
			      <strong class = ''>($jumlahrating3)</strong>  
			      <BR>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <strong class = ''>2.0</strong>  
			      <strong class = ''>($jumlahrating2)</strong>  
			      <BR>
			      <i class='fas fa-star' style='color: #ffa305;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <i class='fas fa-star' style='color: #a6a6a6;'></i>
			      <strong class = ''>1.0</strong>  
			      <strong class = ''>($jumlahrating1)</strong>";
			      ?>
          </div>
        </div>

      </div>
      </div>
    </div>
</div>
</div>

  
<!--end of container ulasan-->
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
