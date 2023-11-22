
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>input tracking</title>
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

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
    
    a{
			text-decoration: underline;
			color:white;
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
                <a class="nav-link active" aria-current="page" href="listpesanantoko.php?userr=<?php echo $username ?>">Pesanan</a>
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
   
   <!--start of form-->
   <?php
    include "koneksi.php";
   	$username = $_REQUEST['userr'];
    $trid = $_REQUEST['trid'];
    $query = "SELECT * FROM transactionheader WHERE transactionid = '$trid'";
    $cek = mysqli_query($con, $query);
    $row = mysqli_fetch_array($cek);
    $pajak = 10/100 * ($row[10] + $row[11]);
    $totalbiaya = $pajak + $row[10] + $row[11];
   ?>
   <form action="trackingprocess.php?userr=<?php echo $username ?>&trid=<?php echo $trid ?>" method="post">
   
   <div class='container ' style='width: 90%; '>
   <div class='container mt-5 '>
      <h4><b>Booking Consultation Form</b></h4>
    </div>
    </div> 

    <!--kolom dalam-->
    <div class='container' style='width: 90%; '>
    <div class='row mt-3'>
        <div class='col-sm-3' >
            <div class='card'>
                <img src='images/<?php echo $row[12] ?>' class='card-img-top' alt=''/>
                <div class='card-body text-center'>
                  <h6 class='card-text'><b>Kondisi Perangkat</b></h6>
                </div>
              </div>

              <!--tampilan harga-->
              <div class='col mt-2' >
                <div class='card'>
                  <div class='card-header text-white' style = 'background-color: #1E88E5;'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-receipt' viewBox='0 0 16 16'>
                      <path d='M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z'/>
                      <path d='M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z'/>
                    </svg> Receipt
                    
                    </div>

                    <div class='card-body'>
                      <!--show biaya perbaikan-->
                      <div class='row'>
                        <div class='col'>
                            <p class = 'font-weight '><b>Biaya Perbaikan</b></p>
                        </div>
                        <div class='col'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>Rp <?php echo number_format($row[11],2) ?></div>
                        </div>
                      </div>
                        <!--show biaya admin-->
                        <div class='row'>
                          <div class='col'>
                              <p class = 'font-weight '><b>Biaya Admin</b></p>
                          </div>
                          <div class='col'>
                              <div class = 'text-muted' style = 'font-size: 15px;'>Rp <?php echo number_format($row[10],2) ?></div>
                        </div>
                      </div>
                        <!--show biaya pajak-->
                        <div class='row'>
                          <div class='col'>
                              <p class = 'font-weight'><b>Pajak 10%</b></p>
                          </div>
                          <div class='col'>
                              <div class = 'text-muted' style = 'font-size: 15px;'>Rp <?php echo number_format($pajak,2) ?></div>
                          </div>
                        </div> 
                        <hr class='hr hr-blurry' />
                        <div class='row'>
                          <div class='col'>
                              <p class = 'font-weight'><b>TOTAL</b></p>
                          </div>
                          <div class='col'>
                              <div class = 'text-muted' style = 'font-size: 15px;'>Rp <?php echo number_format($totalbiaya,2) ?></div>
                          </div>
                        </div> 
                    </div>

                    <!--add harga-->
                    <div class='container' style='margin-bottom: 6%;'>
                      <label for='exampleInputEmail1'><b>Biaya Perbaikan</b></label>
                      <div class='input-group mb-3'>
                        <span class='input-group-text'>Rp</span>
                        <input type='number' name='biayaperbaikan' value='<?php echo $row[11] ?>' class='form-control' aria-label='Amount (to the nearest dollar)'>
                        <span class='input-group-text'>.00</span>
                      </div>
                      <!-- ini biaya admin flat gt ato toko yg masukin yak ? -->
                      <label for='exampleInputEmail1'><b>Biaya Admin</b></label>
                      <div class='input-group mb-3'>
                        <span class='input-group-text'>Rp</span>
                        <input type='number' name='biayaadmin' value='<?php echo $row[10] ?>' class='form-control' aria-label='Amount (to the nearest dollar)'>
                        <span class='input-group-text'>.00</span>
                      </div>
                     <!-- <button type='button' class='btn btn-outline-dark'>Set Harga</button>-->
                    </div>
                    
                </div>
              </div>

             
           
        </div>
        <div class='col-sm-5'>
            <div class='card'>
                <div class='card-header text-white' style = 'background-color: #1E88E5;'>
                Riwayat Pelacakan
                </div>
                <div class='card-body'>
                    <table class='table table-striped '>
                        <thead class='table-light'>
                          <tr>
                            <th scope='col'>Date</th>
                            <th scope='col'>Time</th>
                            <th scope='col'>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<?php 
                        	include "koneksi.php";
                        	$history = "SELECT * FROM sejarahpemesanan WHERE transactionid = '$trid'";
											    $jalanin = mysqli_query($con, $history);
                          	while ($roww = mysqli_fetch_array($jalanin)){;
                          	echo"	
                        		<tr>
                            <td class = 'text-muted' style = 'font-size: 15px;'>$roww[1]</td>
                            <td class = 'text-muted' style = 'font-size: 15px;'>$roww[2]</td>
                            <td class = 'text-muted' style = 'font-size: 15px;'>$roww[3]</td>
                            </tr>";
                       			};
                          ?>
                          </tbody>
                      </table>
                </div>
              </div>

              <!--tambah sejarah pemesanan-->
              <div class='card mt-2'>
							<div class='modal-content'>
                        <div class='modal-header'>
                          <h5 class='modal-title' id='exampleModalLabel'>Tambah Catatan Pesanan</h5>
                          </button>
                        </div>
                        <div class='modal-body'>
                          <form>
                            <div class='form-group mt-2'>
                              <label for='exampleInputEmail1'><b>Tanggal</b></label>
                              <div class='input-group date' id='datepicker'>
                                <input type='date' name='tanggal' class='form-control '>
                              </div>
                            </div>
                            <div class='form-group py-2'>
                              <label for='exampleInputEmail1'><b>Waktu</b></label>
                              <div class='input-group date' id='timepicker'>
                                <input type='time' name='waktu' class='form-control'>
                              </div>
                            </div>
                            <div class='form-group py-2'>
                              <label for='exampleInputEmail1'><b>Description</b></label>
                              <textarea class='form-control' name='deskripsi' id='message-text'></textarea>
                            </div>
                          </form>
</div>
</div>
</div>
<BR>
<center><button type='submit' class='btn btn-outline-dark'>Submit</button></center>
</div>

        <div class='col-sm-4'>
            <div class='card '>
                <div class='card-header text-white ' style = 'background-color: #1E88E5;'>
                    Info Pelanggan
                </div>
                <div class='card-body'>
                  	<?php 
                  	echo"
                    <!--username-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Username</b></p>
                        </div>
                        <div class='col-6'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>$row[1]</div>
                        </div>
                    </div>
                    <!--TANGGAL-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Tanggal Pemesanan</b></p>
                        </div>
                        <div class='col-6'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>$row[7]</div>
                        </div>
                    </div>
                    <!--waktu pemesanan-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Waktu Pemesanan</b></p>
                        </div>
                        <div class='col-6'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>$row[8]</div>
                        </div>
                    </div>
                    <!--Merk-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Merek Perangkat</b></p>
                        </div>
                        <div class='col-6'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>$row[4]</div>
                        </div>
                    </div>
                    <!--Seri perangkat-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Seri Perangkat</b></p>
                        </div>
                        <div class='col-6'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>$row[5]</div>
                        </div>
                    </div>
                    <!--Desc perangkat-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Deskripsi Masalah</b></p>
                        </div>
                        <div class='col-6'>
                            <div class = 'text-muted' style = 'font-size: 15px;'>$row[6]</div>
                        </div>
                    </div>

                    <!--border-->
                    <hr class='hr hr-blurry' />

                    <!--status pesanan-->
                    <div class='row'>
                        <div class='col-6'>
                            <p class = 'font-weight-bold '><b>Status Pesanan</b></p>
                        </div>
                        <div class='col-6'>
                            <h6 style='color:blue' >$row[9]</h6>
                            <!-- <h6 style='color:red' >Pesanan dibatalkan</h6>
                            <h6 style='color: green' >Pesanan selesai</h6> -->
                        </div>
                    </div>";
                    ?>
                    
                    <!--update status pesanan -->
                    <hr class='hr hr-blurry' />
                    <!-- <label for='exampleInputEmail1'>Update Status</label> -->
                         <div class='container mt-2'>
                            <div class='btn-group'>
                                <h6 style='color:black' >Update Status: </h6>
                            </div>
                            <select name='status' id='cars'>
                            			<option value='<?php echo $row[9] ?>' hidden><?php echo $row[9] ?></option>
                            			<!--<option value=<?php echo $row[9] ?>><?php echo $row[9] ?></option>-->
                            			<option value='Pesanan Diterima'>Pesanan Diterima</option>
															    <option value='Pesanan Dibatalkan'>Pesanan Dibatalkan</option>
															    <option value='Pesanan Selesai'>Pesanan Selesai</option>
														</select>
                        </div>
                        <div class='container mt-2'>
                        <small id='passwordHelpBlock' class='form-text text-muted'>
                            *choose the newest status
                        </small>
                      </form>
                        </div>
                </div>
              </div>
        </div>
    </div>
  </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
