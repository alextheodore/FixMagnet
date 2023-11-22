<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
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
        .imageheader{
            position: relative;
        }
        .imageheader img{
            display: block;
            width: 100%;
            height: 48vw;
        }
        .transition{
            position: absolute;
            top: 0px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .transition:hover{
            opacity: 1;
        }
        .intro h1{
            color: white;
            font-family:roboto;
            font-weight: bold;
            position: absolute;
            top: 20vw;
            left: 30vw;
            font-size: 7vw;
        }
        .intro h1:hover{
            color: #19A7CE;
        }
        .intro h2{
            color: white;
            font-family:roboto;
            position: absolute;
            top: 28vw;
            right: 38vw;
            font-size: 2vw;
        }
        .container {
            align-items: center;
            justify-content: center;
        }
  
        .image {
            max-width: 25%;
            max-height:15%;
            float: left;
        }
        .text {
            font-family: roboto;
            font-size: 20px;
            padding-left: 20px;
            padding-top: 20%;
            float: left;
        }
        .aboutUs h1{
            font-weight: bold;
            font-family: serif;
            font-size: 60px;
            margin-top: 150px;
            margin-bottom: 40px;
            color: #19A7CE;
            text-align: center;
        }
        .aboutUs h3{
            font-family: roboto;
            color: black;
            margin-left: 50px;
            margin-right: 50px;
            text-align: center;
        }
        .history{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 7vw 0;
}
.list{
    display: flex;
    justify-content: space-around;
    width: 100%;
    margin: 2vw;
    margin-bottom: 1vw;
}
.cart img{
    display: flex;
    height: 20vw;
    width: 20vw;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.925);
    margin-bottom: 3vw;
}
.text p{
    display: flex;
    width: 20vw;
    justify-content: space-around;
    align-items: center;
    position: relative;
    text-align: center;
    font-size: 2vw;
    margin-bottom: 5vw;
    font-family: roboto;
}
.judul{
    font-weight: bold;
    font-family: serif;
    font-size: 55px;
    color: #19A7CE;
    padding-top: 1vw;
    margin-bottom: 40px;
}
.cart a{
    text-decoration: none;
    color: #ffffff;
    text-align: center;
    padding: 5vw;
    position: relative;
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
    <nav class="navbar navbar-expand-sm navbar-light bg-dark" data-bs-theme="dark">
        <div class="container">
        	<img src="Logo.png" alt="">
          <!--<a class="navbar-brand " href="#">Service4U</a>-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="selectrole.php">Register</a>
              </li>			
            </ul>		  
          </div>
        </div>
      </nav>
    <div class="imageheader">
        <img src="homephoto.jpg" alt="">
        <img class="transition" src="hometransition.jpg" alt="">
    </div>
    <div class="intro">
        <h1>FIXMAGNET</h1>
        <h2>Online Reparation Website</h2>
    </div>
    <div class="aboutUs">
        <h1>WHO ARE WE</h1>
        <h3>Our website specializes in facilitating seamless device repair bookings, catering to a diverse range of electronic devices such as laptops, and personal computers.
            Our user-friendly service offers a hassle-free solution, allowing customers to schedule repair services effortlessly from the comfort of their homes,
            eliminating the need to physically visit unfamiliar stores. Emphasizing convenience and reliability,
            our platform aims to redefine the repair experience for users seeking efficient solutions for their electronic devices.
        </h3>
    </div>
    <div class="history">
        <div class="judul">OUR SERVICES</div>
        <div class="list">
            <div class="cart">
                    <div class="img">
                        <img src="cart1.png" alt="">
                        <div class="text" style="padding-left: 0;padding-top: 0;">
                            <p>Laptop</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cart">
                    <div class="img">
                        <img src="cart3.jpg" alt="">
                        <div class="text" style="padding-left: 0;padding-top: 0;">
                            <p>Personal Computer</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>