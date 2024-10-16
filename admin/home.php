<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome links -->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  -->

    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../js/bootstrap.bundle.min.js"></script> 

    <style>
        .navbar{
        background-color:pink;
    }
     .nav-item{
            opacity: 0.8;
        }
        .nav-item:hover{
            opacity: 2;
        }

        .image{
            width:50px;
            border-radius:50%;
        }

        .admin-list1{
            width:25%;
            background-image:url("../image/admin1.jpg") ;
            background-repeat: no-repeat;
            background-size:100% 100%;

           
        }
      .list:hover{
            background-color:pink;
        }
        a{
            text-decoration:none;
            color:black;
            font-weight:500;
        }
        .admin-list2{
            width:75%;
            height:100vh;
        }
        
    </style>
</head>
<body class="bg-light">
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" id="mainNav"">
        <div class="container">
            <img src="../image/logo.jpg" alt="" class="image shadow ms-3">
            <a class="navbar-brand text-muted ms-5 fs-3 fw-bold" href="#">Decora Beauty Clinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button> 
            <div class="collapse navbar-collapse  justify-content-end fs-5 fw-400" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-black-50 me-5" aria-current="page" href="../index.php">Logout</a>
                    </li>
                </ul>    
            </div>
        </div>
    </nav>
    
   
        <div class="d-flex">
            <div class="admin-list1">

                <ul class="list-group list-group-flush fs-5 opacity-75">
                    <li class="list-group-item list p-4 ps-5" style=" background-color:#F39CC4;" >
                        <a href="./home.php">Home</a>
                    </li>
                    <li class="list-group-item list p-4 ps-5" style=" background-color:#F39CC4;">
                        <a href="./appointment.php">Appointments</a>
                    </li>
                    <li class="list-group-item list p-4 ps-5" style=" background-color:#F39CC4;">
                        <a href="./doctor.php">Doctors</a>
                    </li>
                    <li class="list-group-item list p-4 ps-5" style=" background-color:#F39CC4;">
                        <a href="./user.php">Users</a>
                    </li>
                </ul>
            </div>
            <div class="admin-list2" style="background-color:pink;">
                <div class="alert alert-light m-4" role="alert">
                    Welcome Back Administrator!
                </div>

            </div>
        </div>
    
</body>
</html>