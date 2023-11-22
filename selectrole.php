<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>About</title>
</head>

<body>
    <!-- CSS -->
    <style>
        .backgrondd {
            background: #146c94;
            background: -webkit-linear-gradient(to right, rgba(20, 108, 148, 0.7), rgba(25, 167, 206, 0.7));
            background: linear-gradient(to right, rgba(20, 108, 148, 0.7), rgba(25, 167, 206, 0.7))
        }

        i.bi {
            display: inline-block;
            padding-right: 5px;
        }

        .container img {
            max-width: 200px;
            max-height: 200px;
        }

        .card {
            margin-right: 50px;
            width: 500px;
            height: 415px;
        }

        .Logo {
            max-width: 350px;
            max-height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            margin-left: 90px;
            width: 250px;
        }

        /* Footer */
        .footer-bottom {
            height: 80px;
            background-color: #212529;
        }

        .footer-bottom p {
            font-family: Roboto;
            font-size: 25px;
            color: white;
            text-align: center;
            vertical-align: middle;
            line-height: 80px;
        }
    </style>
    <!-- Css End -->

    <!-- Navbarnya  -->
    <nav class="navbar navbar-expand-sm navbar-light bg-dark" data-bs-theme="dark">
        <div class="container">
            <img src="Logo.png" alt="">
            <!-- <a class="navbar-brand " href="#">Service4U</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    
                    

    </nav>
    <!-- Navbar End -->
    <div class="pb-5"></div>
    <!-- Pilih Role Start -->
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card">
            <img src="Role_User.png" class="Logo" alt="...">
            <div class="card-body">
            	<a href=register.php class="btn btn-dark">User</a>
            </div>
        </div>

        <div class="card">
            <img src="Role_Toko.png" class="Logo" alt="...">
            <div class="card-body">
              <a href=registertoko.php class="btn btn-dark">Toko</a>
            </div>
        </div>
    </div>
    <!-- Pilih Role End -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

</body>

</html>