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
     
    </style>
    <!-- Start your project here-->
    <nav class="navbar navbar-expand-sm navbar-light bg-dark" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand " href="#">Service4U</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                  <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="30"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
                   Welcome Back,
              </a>
              <li class="nav-item">
                   <a class="nav-link active" href="#">user</a> 
    </nav>
    <!--border atas-->
    <div class=" container-fluid carousel-contain py-5 px-5">
      <div class="row">
       
    <!-- carousel card -->
    <div class="col-md-4">
    <div id="carouselExampleFade" class="carousel slide carousel-fade ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="download (1).jpeg" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="download.jpeg" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="carousel-item">
          <img src="download (2).jpeg" class="d-block w-100 rounded" alt="...">
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
    </div>
      

    <!--desc of shop-->
    <div class="col-md-4" >
    <h3>Toko ABC</h3>
    <small class="py-2 text-body-secondary">Supermall Karawaci Lt 3 No 11, Karawaci, Kota Tangerang</small>
    <br>
    <small class = "py-2 text-muted">
       Layanan :
       <span class="badge rounded-pill text-bg-success">PC</span>
       <span class="badge rounded-pill text-bg-success">LAPTOP</span>
      <!-- <small class="text-success">: PC, LAPTOP</small> -->
    </small>
    <div class="rating py-3">
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #a6a6a6;"></i>
      <strong class = "">4.0</strong>  
    </div>
    <small  class = "text-body-secondary py-2">
      DETAILS
    </small  >
  <br>
     <small class="text-body">sejak tahun 2005 letak toko di jakarta, Toko ABC melayani berbagai bentuk servis Laptop dan PC</small>
  
  
    <!-- <small class = "py-2 text-muted">Detail</small>
    <small class="text-body-secondary">Berdiri sejak tahun 2005, Toko ABC melayani berbagai bentuk servis Laptop dan PC</small>
     -->
    </div>
   
    <!--operational time -->
    <div class="col-md-4" >
      <div class="card mb-3" style="width: 19rem;">
      <div class="card-body">
        <h5 class="text-left">OPERATIONAL</h5>
        <div class="row py-2">
          <div class="col-md">
            <small class = "text-muted">Monday
              <br>
              Tuesday
              <br>
              Wednesday 
              <br>
              Thursday
              <br>
              Friday
              <br>
              Saturday
              <div class = "text-danger">Sunday</div>
            </small>
          </div>
          <div class="col-md-5">
            <small class = "text-muted">10AM - 6PM
              <br>
              10AM - 6PM
              <br>
              10AM - 6PM 
              <br>
              10AM - 6PM
              <br>
              10AM - 6PM
              <br>
              10AM - 6PM
              <div class = "text-danger">Closed</div>
            </small>
          </div>
        </div>
        <div class ="container col-md-8">
        <button type="button" class="btn btn-dark ">Appoinment Now</button>
      </div>
    </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Ulasan-->
  <div class="container-lg">
    <h5 class = "text-black">ULASAN PELANGGAN</h5>
  </div>
  <!--container ulasan-->
  <div class="container">
  <!--card ulasan 1-->
    <div class="card text-bg-light mb-3" style="max-width: 65rem;">
      <div class="d-flex flex-row mb-1 px-2 ">
        <div class="p-2">
          <img src="am-a-19-year-old-multimedia-artist-student-from-manila--21.png" class="img-fluid rounded-start" style = "height: 40px" alt="...">
        </div>
        <div class="p-2">
          <div class = "text-black py-2">Anonymous</div>
        </div>
      </div>
      <div class="card-body">
          <p class="card-text">Perbaikan sesuai dengan yang diminta dan staff juga ramah. Hanya sayang aja kerjanya sedikit lebih lama dari estimasi tapi overall recommend</p>
      </div>
    <div class="card-header">
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #ffa305;"></i>
      <i class="fas fa-star" style="color: #a6a6a6;"></i>
      <small class="text-body-secondary">- 1 Day Ago</small></div>
    </div>
      <!--ulasan ke 2-->
    
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
