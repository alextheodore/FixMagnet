<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Berhasil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .container img {
        max-width: 200px;
        max-height: 200px;
    }
    body{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
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
    .Deskripsi{
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        font-weight: 500;
        font-size: larger;
        color: #ffffff;
    }
    .containers{
        position: relative;
        width: 700px;
        background: #444;
        padding: 20px 30px;
        border: 1px solid #444;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-left: auto;
        margin-right: auto;
        margin-top: 45px;
    }
    .containers .post{
        display: none;
        color: white;
    }
    .containers .text{
        font-size: 25px;
        color: white;
        font-weight: 500;
    }
    .containers .edit{
        position: absolute;
        right: 10px;
        top: 5px;
        font-size: 16px;
        color: #ffffff;
        font-weight: 500;
        cursor: pointer;
    }
    .containers .edit:hover{
        text-decoration: underline;
    }
    .containers .star-widget input{
        display: none;
    }
    
    .container img{
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

<body>
    
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
                
              
      </nav>
    <!-- Navbar End -->	

      <div class="containers">
        <div class="deskripsi">
            <h3 class="text-light">Terima Kasih Telah Memberi Ulasan !</h3>
        </div>
      </div>

</body>
</html>