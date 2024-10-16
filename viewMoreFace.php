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
        <h1 class="text-center p-5">Treatment about FACE</h1>
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
                <img src="./viewMoreImage/image1.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"> <span class="title">Rhinoplasty </span><br><br>Rhinoplasty is nose reshaping treatment.Rhinoplasty is one of the most commonly performed procedures in cosmetic surgery.
                Rhinoplasty, commonly called nose job, medically called nasal reconstruction is a plastic surgery procedure for altering and reconstructing the nose.</td>
            </tr>

            <!-- second photo -->
            <tr>
              <th scope="row">
                <img src="./viewMoreImage/image2.jpg" alt="" class="image2">
              </th>
              <td class="text-left p-5"><span class="title">Acne treatment </span><br><br>
                Light treatment:A variety of light-based therapies and require multiple visits to your doctor's office.
                Chemical peel:This procedure uses repeated applications of a chemical solution, such as salicylic acid, glycolic acid or retinoic acid. This treatment is for mild acne
                Drainage and extraction: The doctor  use special tools to gently remove whiteheads and blackheads.
                Steroid injection:Nodular and cystic lesions can be treated by injecting a steroid drug into them. This therapy has resulted in rapid improvement and decreased pain. 
                The way to treat depends on your skin type.
            </td>
            </tr>

            <!-- third photo -->

            <tr>
              <th scope="row">
                <img src="./viewMoreImage/image3.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"><span class="title">Microneedling</span><br><br>
              A procedure that uses tiny needles to treat scars, enlarged pores, wrinkles, and stretch marks.The procedure causes short-term swelling, redness, and skin flaking.Microneedling can help improve the appearance and texture of your skin.
            </td>
            </tr>

             <!-- fourth photo -->

             <tr>
              <th scope="row">
                <img src="./viewMoreImage/image4.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"><span class="title">Face and Lip Filter</span><br><br>
              Face and lip fillers (dermal fillers) are substances injected into your face. They fill lines and wrinkles and add volume to areas such as your lips or cheeks. Fillers are not permanent.
            </td>
            </tr>

            <!-- fifth photo -->

            <tr>
              <th scope="row">
                <img src="./viewMoreImage/image5.jpg" alt="" class="image">
              </th>
              <td class="text-left p-5"><span class="title">Botox Injection</span><br><br>
              Botox injections are noted primarily for the ability to reduce the appearance of facial wrinkles. They're also used to treat conditions such as neck spasms (cervical dystonia), excessive sweating (hyperhidrosis), an overactive bladder and lazy eye.
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