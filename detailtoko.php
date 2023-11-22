<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Detail page</title>
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
     a{
			text-decoration: underline;
			color:white;
		}
		
		.container img {
            max-width: 200px;
            max-height: 200px;
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
    <!-- Start your project here-->
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
              <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="bi bi-person"></i>
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="30"
                    alt="Black and White Portrait of a Man" loading="lazy" /> -->
                </a>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>
              
      </nav>
    <!-- Navbar End -->
    <!--border atas-->
    <div class=" container-fluid carousel-contain py-5 px-5">
      <div class="row">
       
    <!-- carousel card -->
<!--    <div class="col-md-4">
    <div id="carouselExampleFade" class="carousel slide carousel-fade ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="tokoabcsfdfsfd.png" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="tokoabcsfdsf.png" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="tokoabcsdfsf.png" class="d-block w-100 rounded" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>-->
      
		<?php
			include "koneksi.php";
			$tokofromdb = $_REQUEST['tokoo'];
			$userfromdb = $_REQUEST['userr'];
			$ambilnamatoko = "SELECT * from toko WHERE usernametoko = '$tokofromdb'";
			$cektoko = mysqli_query($con, $ambilnamatoko);
			$row = mysqli_fetch_array($cektoko);
			$ulasan = "SELECT deskripsiulasan, usernamecustomer, nilaiulasan FROM ulasan JOIN transactionheader ON transactionheader.transactionid = ulasan.transactionid WHERE usernametoko = '$tokofromdb'";
			$cekulasan = mysqli_query($con, $ulasan);
			$rating5 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 5
AND usernametoko = '$tokofromdb'";
			$cekrating5 = mysqli_query($con, $rating5);
			$jumlahrating5 = mysqli_num_rows($cekrating5);
			$rating4 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 4
AND usernametoko = '$tokofromdb'";
			$cekrating4 = mysqli_query($con, $rating4);
			$jumlahrating4 = mysqli_num_rows($cekrating4);
			$rating3 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 3
AND usernametoko = '$tokofromdb'";
			$cekrating3 = mysqli_query($con, $rating3);
			$jumlahrating3 = mysqli_num_rows($cekrating3);
			$rating2 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 2
AND usernametoko = '$tokofromdb'";
			$cekrating2 = mysqli_query($con, $rating2);
			$jumlahrating2 = mysqli_num_rows($cekrating2);
			$rating1 = "SELECT ulasanid FROM ulasan JOIN transactionheader ON ulasan.transactionid = transactionheader.transactionid WHERE nilaiulasan = 1
AND usernametoko = '$tokofromdb'";
			$cekrating1 = mysqli_query($con, $rating1);
			$jumlahrating1 = mysqli_num_rows($cekrating1);
			
			echo "
			<div class='col-md-4'>
              <img src='$row[0].png' class='d-block w-100 rounded' alt='...' height='300vh' margin='20px'>
      </div>
			
	    <!--desc of shop-->
	    <div class='col-md-4' >
	    <h3>$row[3]</h3>
	    <small class='py-2 text-body-secondary'>$row[4]</small>
	    <br>
	    <small class = 'py-2 text-muted'>
	       Layanan :
	       <span class='badge rounded-pill text-bg-success'>$row[5]</span>
	      <!-- <small class='text-success'>: PC, LAPTOP</small> -->
	    </small>
	    <div class='rating py-3'>
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
	      <strong class = ''>($jumlahrating1)</strong>  
	    </div>
	    <small  class = 'text-body-secondary py-2'>
	      DETAILS
	    </small  >
	  <br>
	     <small class='text-body'>$row[6]</small>
	  
	  
	    <!-- <small class = 'py-2 text-muted'>Detail</small>
	    <small class='text-body-secondary'>Berdiri sejak tahun 2005, Toko ABC melayani berbagai bentuk servis Laptop dan PC</small>
	     -->
	    </div>
	   
	    <!--operational time -->
	    <div class='col-md-4' >
	      <div class='card mb-3' style='width: 19rem;'>
	      <div class='card-body'>
	        <h5 class='text-left'>OPERATIONAL</h5>
	        <div class='row py-2'>
	            <small class = 'text-muted'>
	            	$row[7]
	            </small>
	        </div>
	        <div class ='container col-md-8'>
	        <button type='button' class='btn btn-dark'><a href = bookingform.php?tokoo=$tokofromdb&userr=$userfromdb>Appoinment Now</a></button>
	      </div>
	    </div>
	      </div>
	    </div>
	  </div>
	  </div>";
		
	  if (mysqli_num_rows($cekulasan) == 0){
	  	echo"
	  	<div class='container-lg'>
	    	<h5 class = 'text-black'>Belum ada ulasan untuk toko ini</h5>
	  	</div>";
	  }
	  else{
	  	echo"
	  	<div class='container-lg'>
	    <h5 class = 'text-black'>ULASAN PELANGGAN</h5>
	  	</div>";
	  	
	  	while ($roww = mysqli_fetch_array($cekulasan)){
	  				$start=1;
            echo"
      <!--container ulasan-->
      <div class='container'>
      <!--card ulasan 1-->
        <div class='card text-bg-light mb-3' style='max-width: 65rem;'>
          <div class='d-flex flex-row mb-1 px-2 '>
          <div class='p-2'>
          	<img src='anonymous.png' class='img-fluid rounded-start' style = 'height: 40px' alt='...'>
        	</div>
            <div class='p-2'>
              <div class = 'text-black py-2'><b>$roww[1]</div></b>
            </div>
          </div>
          <div class='card-body'>
              <p class='card-text'>$roww[0]</p>  
          </div>
          </div> 
          </div>
          </div>";
      };
	  }
	  
	#<!--end of container ulasan-->
	    #<!-- End your project here-->
?>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
