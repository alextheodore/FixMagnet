<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!-- Buat import Bootstrapnya sebenernya tinggal masukkin yang di bawah ini-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<form action="logintokoprocess.php" method="post">
  <!-- Ini kayak buat CSS nya, kalo mau dipisah ke file css lain bisa, tapi agak ribet -->
  <style>
    .backgrondd {
      background: #146c94;
      background: -webkit-linear-gradient(to right, rgba(20,108,148,0.7), rgba(25,167,206,0.7));
      background: linear-gradient(to right, rgba(20,108,148,0.7), rgba(25,167,206,0.7))
    }

    input{
      max-width: 90%;
      margin-left: auto;
      margin-right: auto;
    }
    
    .form-check{
      max-width: 90%;
      margin-left: auto;
      margin-right: auto;
    }

    nav{
        position: fixed;
    }
    
    .container img {
            max-width: 200px;
            max-height: 200px;
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="register.php">Register</a>
              </li>			
            </ul>		  
          </div>
        </div>
      </nav>
            
  <!-- Jadiin gambar jadi background di sini -->
  <div class="bg-image" style="
  background-image: url('https://images.squarespace-cdn.com/content/v1/5d05a89ce31cc400016b2a4a/1566692273014-SAPEWZUKM81695LSA4U3/MAIN.png?format=2500w');
  height: 100vh;">

  <!-- Buat nambahin filter warna biru -->
  <div class="backgrondd">
  <section class="vh-100 gradient-custom mb-5">

    <!-- Buat kotak register -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10 col-md-8 col-lg-8 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-xl-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Log In</h2>
              <p class="text-white-50 mb-5"></p>

              <!-- Phone, dan password -->
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Username</label>
                  <input type="text" autocomplete="off" name="username" id="typeEmailX" class="form-control form-control-lg" />      
              </div>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" autocomplete="off" name="password" id="typePasswordX" class="form-control form-control-lg" />
              </div>


              <!-- Tombol register -->
              <button class="btn btn-outline-light btn-lg px-5 mt-5" type="submit">Sign In</button>
            </div>

            <!-- Buat login kalo udah punya akun -->
            <div class="">
              <p class="mb-0 ">No Account ? <a href="#!" class="text-white-50 fw-bold">Register</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  </div>
</div>
    </div>

    <!-- Ini buat import bootstrap javascript kalo ga salah, tapi untuk sekarang belom perlu sih -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</form>

</body>
</html>