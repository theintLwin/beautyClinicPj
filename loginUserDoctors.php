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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <?php
          $userId =$_GET['uid'];
        //  $doctorId = $_POST['doctor_id'];
         //echo $userId;
         session_start();
         $_SESSION['userId']=$userId;
         $connection = mysqli_connect('localhost','root','','beauty_clinic_db');
  if(!$connection){
    echo "db connect fail!".mysqli_connection_error();
}else{
    $sql2 = "SELECT * FROM user_registered_list WHERE u_id = $userId   ";
    $query = mysqli_query($connection, $sql2);
    //echo "<pre>";
    // var_dump($query);
    $row = mysqli_fetch_assoc($query);
   $name = $row['Name'];
}
    ?>
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" id="mainNav">
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
                        <a class="nav-link text-black" href="./loginUserDoctors.php">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link text-black" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a> -->
                        <a class="nav-link text-black" href="./index.php" class="me-3">
                            >><?php echo $name; ?>
                        </a>

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
            <form action="#" class=" p-3 h-75 mt-1 fs-5" >
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="userEmail">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"  name="userPw">
                </div>
                <h6 class="mt-3">If you don't have an account?<a href="javascript:void(0)" id="new_account" class="ms-3 signup-btn">Sign Up</a></h6>
                <input type="submit" value="Login" class="btn btn-primary mb-3 mt-4 purpleColor">
                
                    

            </form>
        </div>
        
      </div>
    </div>
  </div>
   <!-- Modal Time-->
   <div class="modal fade" id="datetimeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">LOGIN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body mt-0">
        <form action="./loginDB.php" method="POST">
			<!-- <input type="hidden" name="doctor_id" value="<?php echo $_GET['id'] ?>"> -->
			<div class="form-group">
				<label for="" class="control-label">Date</label>
				<input type="date" value="" name="date" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="" class="control-label">Time</label>
				<input type="time" value="" name="time" class="form-control" required>
			</div>

			<hr>
			<div class="col-md-12 text-center">
				<button class="btn-primary btn btn-sm col-md-4">Request</button>
				<button class="btn btn-secondary btn-sm col-md-4  " type="button" data-dismiss="modal" id="">Close</button>
			</div>
		</form>
        </div>
        
      </div>
    </div>
  </div>
<?php
   
    
// //   if ($_COOKIE['appointment'])
// //     {
// //         ?>
  <div class="alert alert-success d-flex justify-content-between">
   
    <strong>Success</strong>
     <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert" class="margin-end"></button>

 </div>

 <!-- <?php
    
    
// ?> -->

 
  
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Your Appointment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body mt-0">
            <div class="alert alert-success" role="alert">
                Appointment Successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <?php
         $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

         if(!$connection){
             echo "db connect fail!".mysqli_connection_error();
         }else{
            
             if(isset($_POST['regBtn'])){
             
                 $userName = $_POST['regName'];
                 
                 $userEmail = $_POST['regEmail'];
                
                 $userPh = $_POST['regPhone'];
                 $userAddress = $_POST['regAddress'];
                 $userAge = $_POST['regAge'];
                 $userGen = $_POST['gender'];
                 $userPw = $_POST['regPw'];
                 
             
                  $sql = "INSERT INTO user_registered_list (Name, Email, Phone_Number,Address,Age,Gender,Password)  VALUES ('$userName', '$userEmail', '$userPh','$userAddress', $userAge, '$userGen', '$userPw')";
          
                  //    sqli_query(connection, query) true false
                  if(mysqli_query($connection, $sql)){
                     
                  }else{
                      echo "Query fail!".mysqli_error();
                  }
                 }
          
                 
              }
     
         
    ?>
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
            <!-- <a class="btn search-btn js-scroll-trigger text-white  ms-5  vertical-c" href="./adminAppointment.php?did=<?php echo $row['ID'];?>" >Appointment</a> -->
            <!-- <a class="btn search-btn js-scroll-trigger text-white  ms-5  vertical-c" value="appoint+<?php  echo $row['ID'];  ?>" >Appointment</a> -->
            <!-- <a class="btn search-btn js-scroll-trigger text-white  ms-5  vertical-c" href="./datetimeSelect.php?" >Appointment</a> -->
            <a class="btn search-btn js-scroll-trigger text-white  ms-5  vertical-c" href="./datetimeSelect.php?did=<?php echo $row['ID'];?>& uid=<?php echo $_GET['uid']; ?>" >Appointment</a> 
            
           
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

<div>

</body>

</script>
</html>   