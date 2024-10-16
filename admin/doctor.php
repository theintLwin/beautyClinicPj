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

        .doctor-list1{
            width:30%;
        }

        .doctor-list2{
            width:70%;
        }

        .search-btn{
            width: 100px;
            height: 40px;
            border-radius:20px;
            padding:8px;
            background-color:#6F1AB6;
            font-weight:500;
            font-size:15px;
        }

    /* .form-height{
        height:100%;
    } */
        
    </style>
</head>
<body class="bg-light">
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" id="mainNav">
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
    <?php
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
       //ho "Connected";

    }

?>
   
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
            <div class="admin-list2 d-flex" style="background-color:pink;">
               
                <div class="doctor-list1">
                <form action="../insert.php" class="p-2 m-2 mt-0 bg-light pb-5 form-height" method="POST" enctype="multipart/form-data">
                    <h4>Doctor's Form</h4>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="doctorName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number" name="doctorPhone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="...@gmail.com" name="doctorEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Select image to upload:</label>
                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Time From</label>
                        <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number" name="timeFrom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Time To</label>
                        <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number" name="timeTo">
                    </div>
                    <input type="submit" value="Add Doctor" class="btn search-btn text-white btn-primary mt-2 mx-auto px-auto pb-4 mb-5" name="addDoctorBtn">
                </form>
                </div>
                <div class="doctor-list2 bg-light ">
                    
                <table class="table bg-light border-3 border-dark table-bordered" >
                        <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Info</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       <?php
                          $sql = "SELECT * FROM doctors_list";

                          $query = mysqli_query($connection, $sql);
                         
                         
              
                          $row = mysqli_num_rows($query);
                          //echo $row;
              
                         while($row = mysqli_fetch_assoc($query)){
              
                            //   $time = date('d-m-Y g:i a',strtotime($row['created_at']));
              
                              echo " <tr>
                              <th>{$row['ID']}</th>
                              <td>
                                  <img src='../db_image/{$row['Image']}' style='width:100px;' >
                              </td>
                              <td>
                                  <h6>Name : <b>{$row['Name']}</b> </h6>
                                  <h6>Email: <b>{$row['Email']}</b></h6>
                                  <h6>Contact: <b>{$row['Phone_Number']}</b></h6>
                                  <h6>Time From: <b>{$row['time_from']}</b></h6>
                                  <h6>Time To: <b>{$row['time_to']}</b></h6>

                              </td>
                              <td>
                                  <a href='../editPage.php?id={$row['ID']}' class='btn btn-primary' >Edit</a>
                                  <a href='../deletePage.php?id={$row['ID']}' class='btn btn-danger' name='delete' >Delete</a>

                              </td>
                          </tr>";
                          }
                       ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
                        <!-- Edit Model -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Doctor's Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body mt-0">
            <form action="../edit.php" class=" p-3 h-75 mt-1 fs-5" method="POST" enctype="multipart/form-data">
            <input type="hidden">
            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="editName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="editEmail">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"  name="editPhone">
                </div>

                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Select image to upload:</label>
                        <input type="file" class="form-control" name="editfileToUpload" id="fileToUpload">
                </div>

                <input type="submit" value="Add" class="btn btn-primary mb-3 mt-4 purpleColor" name="addDoctor">
                
                    

            </form>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>