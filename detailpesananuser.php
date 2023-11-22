<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        body {
          background-color: #F6F1F1;
        }
        .heading{
            width: 75vw;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            background-color: #F6F1F1; 
            border: none;
        }
        .productname{
            font-family: roboto;
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
            margin-left: 10vw;
            margin-right: 10vw;
            color: black;
        }
        .card-img{
            width:300px;
            height:200px;
            margin-left: 8vw;
        }
        .alignleft{
            float: left;
            font-weight: bold;
            font-size: 23px;
            margin-top: 7vh;
        }
        .alignright{
            display: flex;
            margin-left: auto;
            float: right;
            font-size: 15px;
        }
        .details{
            margin-left: auto;
        }
        .left{
            width: 300px;
            padding: 20px 0;
        }
        .right{
            width: 300px;
            font-weight: bold;
            padding: 20px 0;
        } 
        .form-group{
            font-weight: bold;
            margin-top: 20px;
            margin-left: 10vw;
            margin-right: 10vw;
        }
        label{
            margin-bottom: 8px;
        }
        .sejarah{
            margin-left: 10vw;
            margin-right: 10vw;
        }
        .judul{
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
        }
        .totalbiaya{
            margin-left: 10vw;
            margin-right: 10vw;
        }
        .totalleft{
            float: left;
        }
        .totalright{
            float: right;
            font-weight: bold;
        }
        .total{
            margin-left: 10vw;
            margin-right: 10vw;
        }
        .grandtotalleft{
            float: left;
            font-weight: bold;
            font-size: 20px;
        }
        .grandtotalright{
            float: right;
            font-weight: bold;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
        button{
            padding: 8px 8px;
            padding-left: 40px;
            padding-right: 40px;
            background-color: #F6F1F1;
        }
        button:hover {
            background-color: #146C94;
            color: #F6F1F1;
        }
        @media only screen and (max-width: 800px) {
            .card-img{
                width: 100%;
                height: auto;
                justify-self: center;
                margin: auto;
            }
            .heading{
                flex-wrap: wrap;
                width: 100%;
            }
            .alignright{
                margin-left: 0;
                margin-right: 350px;
            }
            .details{
                width: 80vw;
                margin: 24px auto;
            }
        }
        .container img {
            max-width: 200px;
            max-height: 200px;
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
    
    <?php
    include "koneksi.php";
    $username = $_REQUEST['userr'];
    $trid = $_REQUEST['trid'];
    $query = "SELECT * FROM transactionheader WHERE transactionid = '$trid'";
    $cek = mysqli_query($con, $query);
    $row = mysqli_fetch_array($cek);
    $pajak = 10/100 * ($row[10] + $row[11]);
    $totalbiaya = $pajak + $row[10] + $row[11];
    
    echo"
    <div class='allcomponent'>
        <div class='productname'>
            <p class='alignleft'>$row[4] $row[5]</p>
            <p class='alignright'>Booking ID : $row[0]</p>
        </div>
    </div>
    <div class='container bcontent'>
        <div class='heading'>
                <div class=''>
                    <img class='card-img' src='images/$row[12]' alt='...'>
                </div>
                <div class='details'>
                    <table>
                        <tr>
                            <td class='left'>Status Pesanan</td>
                            <td class='right'>$row[9]</td>
                        </tr>
                        <tr>
                            <td class='left'>Tanggal Pemesanan</td>
                            <td class='right'>$row[7], $row[8]</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
    <div class='form-group'>
        <p class='judul'>Deskripsi Pelanggan</p>
        <textarea class='form-control' id='exampleFormControlTextarea1' rows='3'placeholder='$row[6]' disabled></textarea>
    </div>    ";
    ?>
    
    <div class='sejarah'>
        <p class='judul'>Status Pesanan</p>
        <?php
        include "koneksi.php";
        $history = "SELECT * FROM sejarahpemesanan WHERE transactionid = '$trid'";
				$jalanin = mysqli_query($con, $history);
				while($roww = mysqli_fetch_array($jalanin)){
				echo"
        <p class='detailleft'>$roww[1], $roww[2]&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;$roww[3]</p><br>
        ";
     		};
        ?>
    </div>

    <div class='totalbiaya'>
        <p class='judul'>Total Biaya</p>
        <p class='totalleft'>Biaya Perbaikan</p>
        <p class='totalright'>Rp <?php echo number_format($row[11],2) ?></p><br><br>
        <p class='totalleft'>Biaya Admin</p>
        <p class='totalright'>Rp <?php echo number_format($row[10],2) ?></p><br><br>
        <p class='totalleft'>Pajak</p>
        <p class='totalright'>Rp <?php echo number_format($pajak,2) ?></p><br><br>
    </div>
    <div class='total'>
        <p class='grandtotalleft'>Total</p>
        <p class='grandtotalright'>Rp <?php echo number_format($totalbiaya,2) ?></p><br><br>
    </div>
    <div class='center'>
        <div class='btn'>
            <button><a href = ulasan.php?userr=<?php echo $username ?>&trid=<?php echo $trid?>>Beri Ulasan</a></button>
        </div>
    </div>
</body>
</html>