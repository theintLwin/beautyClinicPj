<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        .login-pic{
            width:60%;
            height:100vh;
        }
        .mtop-50{
            margin-top:100px;
        }

        .search-btn{
            width: 100px;
            height: 50px;
            border-radius:50px;
            padding-top:8px;
            background-color:#6F1AB6;
            font-weight:500;
            font-size:20px;
        }

        .search-btn:focus{
        background-color:#6F1AB6;
       }
       .search-btn:hover{
        background-color:#4b0459;
       }

       .signup-btn{
        color:#6F1AB6;
       }
    </style>
    
    <!-- font awesome links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
   
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex">
                      
                 <img src="./assets/img/1600924140_1600918740_medical-appointment-cover.jpg" class="login-pic">
                 <h4 class="text-center">Register Form</h4>
            <div class="d-flex mx-auto mt-3">
            
            <!--Register Modal -->
 
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
    
</body>
</html>