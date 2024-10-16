<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
    .navbar{
        background-color:pink;
    }
     .nav-item{
            opacity: 0.8;
        }
        .nav-item:hover{
            opacity: 1.5;
        }
        .bg-pic{
            background-image:url('image/cover1.jpg');
            height:50vh;
            display:flex;
        }
        .welcome-box{
            align-items:center;
            width:80%;
            height:180px;
            border-radius:20px;
            opacity: 0.8;
            background-color:pink;
        }
        .search-btn{
            width: 200px;
            height: 50px;
            border-radius:50px;
            padding-top:8px;
            background-color:#6F1AB6;
            font-weight:500;
            font-size:20px;

        }
        .treatment{
            margrin-top:30px;

        }
       .hrLine{
        border: 3px solid red;
       }
       .vertical-c{
        margin-top:25%;
       }
       .vertical-c:focus{
        background-color:#6F1AB6;
       }
       .vertical-c:hover{
        background-color:#4b0459;
       }

       .icon{
        font-size:65px;
        color: #6F1AB6;
       }
   </style>

</head>

<body class="bg-light">
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" id="mainNav"">
        <div class="container">
          
            <a class="navbar-brand text-muted ms-5 fs-3 fw-bold" href="#">Decora Beauty Clinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> 
            <div class="collapse navbar-collapse  justify-content-end fs-5 fw-300" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="./doctors.php">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="./about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                    </li>
                    
                    </li>
                    
                </ul>
               
    </nav>
    <!-- nav bar end -->
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">LOGIN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body mt-0">
        <form action="loginDB.php" class=" p-3 h-75 mt-1 fs-5" method="POST">
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="userEmail">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="pwd">
                </div>
                <h6 class="mt-3">If you don't have an account?<a href="./Register.php" id="new_account" class="ms-3 signup-btn">Sign Up</a></h6>
                <input type="submit" value="Login" class="btn btn-primary mb-3 mt-4 purpleColor" name="userLoginBtn">
                
                    

            </form>
        </div>
        
      </div>
    </div>
  </div>
    <!-- home page start  -->

     <header class="masthead bg-pic">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title bg-gradient welcome-box">
                    <div class="mt-4">
                        <h3 class="text-black mt-5">Welcome to Decora Beauty Clinic</h3>
                        <hr style="width:20%;  border:3px solid blue;" class="mx-auto mt-5" />
                        
                     </div>
                    </div>                   
                </div>
            </div>
        </header>



    <!-- home page end  -->
    <!--Register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTER</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body mt-0">
            <form class=" p-3 h-75 mt-1 fs-5" method="POST" action="register1.php">
            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="regName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="regEmail">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"  name="regPhone">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"  name="regAge">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <input type="radio" name="gender" value="male" class="form-check-label" id="exampleFormControlInput1">Male
                    <input type="radio" name="gender" value="female" class="form-check-label" id="exampleFormControlInput1">Female
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea name="regAddress" id="" cols="10" rows="4" class="form-control" id="exampleFormControlInput1"  ></textarea>
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="regPw">
                </div>
                
                <input type="submit" value="Register" class="btn btn-primary mb-3 mt-4 purpleColor" name="regBtn">
                
                    

            </form>
        </div>
        
      </div>
    </div>
  </div>

  
    <!-- doctor list start -->
    <div class="container mx-auto mt-5 ms-5 ">

    <?php
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
       

    }
         $sql = "SELECT * FROM doctors_list";

         $query = mysqli_query($connection, $sql);
        
        

         $row = mysqli_num_rows($query);
         //echo $row;

        while($row = mysqli_fetch_assoc($query)){
    ?>
       <div>
       <div class="row ps-5">
            <div class="col-4">
                <img src="./db_image/<?php echo $row['Image']; ?>" alt="" width="200px" height="200px">
            </div>
            <div class="col-4 p-3">
                <h5 class="fs-5 fw-300 mb-3">Name: <?php  echo $row['Name'] ?></h5>
                    <h6 class="fs-6 fw-300 mb-3">Time From: <?php  echo $row['time_from'] ?></h6>
                
                    <h6 class="fs-6 fw-300 mb-3">Time To : <?php  echo $row['time_to'] ?></h6>
            </div>
            <div class="col-4">
            <a class="btn search-btn js-scroll-trigger text-white  ms-5  vertical-c" href="./datetimeSelect.php?did=<?php echo $row['ID'] ?>">Appointment</a>
            </div>
        </div>
        <hr style="width:80%;" class="hrLine mx-auto mt-5 mb-5" />
       </div>
<?php
        }
?>

       

    <!-- footer start -->
    <footer class="bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 ml-auto text-center mb-5 mb-lg-0 ps-5">
                        <i class="fa-solid fa-phone  ms-5 icon mb-3 "></i>
                        <p class="ms-5">09767123456</p>
                    </div>
                    <div class="col-lg-6 mr-auto text-center pe-5">
                        <i class="fa-solid fa-envelope  me-5 icon mb-3"></i>
                        <p class="me-4">decora.beautyclinic@gmail.com</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
            </div>
        </footer>

    

</body>

</script>
</html>   