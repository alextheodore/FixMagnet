<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<form action="ulasanprocess.php" method="post">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
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
.star-widget label{
  font-size: 40px;
  color: #ffffff;
  padding: 10px;
  float: right;
  transition: all 0.2s ease;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color: #fd4;
}
input:checked ~ label{
  color: #fd4;
}
input#rate-5:checked ~ label{
  color: #fd4;
}

.containers form{
  display: none;
}
input:checked ~ form{
  display: block;
}
form header{
  width: 100%;
  font-size: 25px;
  color: #fe7;
  font-weight: 500;
  margin: 5px 0 20px 0;
  text-align: center;
  transition: all 0.2s ease;
}
form .textarea{
  height: 100px;
  width: 100%;
  overflow: hidden;
}
form .textarea textarea{
  height: 100%;
  width: 100%;
  outline: none;
  color: black;
  border: 1px solid #333;
  background: #ffffff;
  padding: 10px;
  font-size: 17px;
  resize: none;
}
.textarea textarea:focus{
  border-color: #444;
}
form .btn{
  height: 45px;
  width: 100%;
  margin: 15px 0;
}
form .btn button{
  height: 100%;
  width: 50%;
  border: 1px solid #444;
  outline: none;
  background: #ffffff;
  color: #2f2f2f;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease;
  border-radius: 0.5rem;
}
form .btn button:hover{
  background: #1b1b1b;
  color: #ffffff;
}

.Deskripsi{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-weight: 500;
    font-size: larger;
    color: #ffffff;
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
     	$trid = $_REQUEST['trid'];
     ?>

    <div class="containers">
        <div class="deskripsi">
            <h3 class="text-light">Beri Ulasan</h3>
            <input type="text" name="transactionid" id="trid" value=<?php echo $trid ?> readonly>
        </div>
        
        <div class="post">
          <div class="text">Terima Kasih Telah Memberi Ulasan !</div>
          <div class="edit">EDIT</div>
        </div>
        
         
        <div class="star-widget">
          <input type="radio" name="rate" id="rate-5" value="5">
          <label for="rate-5" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-4" value="4">
          <label for="rate-4" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-3" value="3">
          <label for="rate-3" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-2" value="2">
          <label for="rate-2" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-1" value="1">
          <label for="rate-1" class="fas fa-star"></label>
          <!--<form action="ulasanprocess.php" method="post">-->
            <header></header>
            <p class="Deskripsi">Deskripsi Ulasan</p>
            <div class="textarea">
              <textarea cols="30" name="ulasan" placeholder="Tulis ulasan di sini"></textarea>
            </div>
            <div class="btn">
              <button type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
  
</body>

</html>