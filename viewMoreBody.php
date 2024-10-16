<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome links -->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  -->

    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="./js/bootstrap.bundle.min.js"></script> 
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
        #modalBox{
            opacity: 1;
        }

        .icon{
        font-size:65px;
        color: #6F1AB6;
       }
       .purpleColor{
        background-color:#6F1AB6;
       }

       .container{
        margin-x:auto;
        
       }

       .table{
        text-align:center;
        width:80%;
        margin: 0 auto;
        
       }

       .image{
        width : 200px;
        height: 180px;
        margin-top:30px;
        margin-bottom:30px;
       }

       .title{
        font-size:20px;
        font-weight:bold;
        
       }

       .image2{
        width : 200px;
        height: 180px;
        margin-top: 70px;
       }

       

   </style>

</head>

<body class="bg-light">
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top" id="mainNav">
        <div class="container">
          
            <a class="navbar-brand text-muted ms-5 fs-3 fw-bold" href="#">Decora Beauty Clinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button> 
            <div class="collapse navbar-collapse  justify-content-end fs-5 fw-400" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-black-50" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black-50" href="./doctors.php">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black-50" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black-50" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                    </li>
                </ul>

        
            </div>
        </div>
    </nav>
    <!-- nav bar end -->
     

    <!-- view more start -->

    <div class="container">
        <h1 class="text-center p-5">Treatment about BODY</h1>
    <table class="table text-center">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <img src="./viewMoreImage/image6.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"> <span class="title">Hifu treatment </span><br><br>
              HIFU is a permanent fat loss treatment. Using heat, it destroys the fat cells in a specific target area like the stomach or the thighs. Not only does it destroy fat, but it also boosts collagen growth which makes the skin tighter and firmer.This treatment uses ultrasound and controlled high temperature to effectively kill fat cells on first touch.
            </td>
            </tr>

            <!-- second photo -->
            <tr>
              <th scope="row">
                <img src="./viewMoreImage/image7.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"><span class="title">  Fat Freezing </span><br><br>
                Fat freezing, is a nonsurgical fat reduction procedure that uses cold temperature to reduce fat deposits in certain areas of the body.
            </td>
            </tr>

            <!-- third photo -->

            <tr>
              <th scope="row">
                <img src="./viewMoreImage/image8.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"><span class="title">Laser treatment for scares</span><br><br>
                Laser treatment for scars reduces the appearance of scars. It uses focused light therapy to either remove the outer layer of the skin’s surface or stimulate the production of new skin cells to cover damaged skin cells.
            </td>
            </tr>

             <!-- fourth photo -->

             <tr>
              <th scope="row">
                <img src="./viewMoreImage/image9.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"><span class="title">Laser hair removal</span><br><br>
                Laser hair removal is a medical procedure that uses a concentrated beam of light (laser) to remove unwanted hair.During laser hair removal, a laser emits a light that is absorbed by the pigment (melanin) in the hair. The light energy is converted to heat, which damages the tube-shaped sacs within the skin (hair follicles) that produce hairs.
            </td>
            </tr>


          </tbody>
        </table>
    </div>
    <div class="text-center mt-4">
      <a href="./index.php" class="btn btn-primary search-btn js-scroll-trigger text-white">Go Home</a>
    </div>
   

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
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
</html>   