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
        
            <div class="d-flex mx-auto mtop-50">
                <form action="#" class="border border-dark  p-5 h-75" >
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="...@gmail.com" name="userEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter your password" name="userPw">
                    </div>
                    <input type="submit" value="Login" class="btn search-btn text-white mt-2 mx-auto px-auto pb-4">
                    <h6 class="mt-3">If you don't have an account?<a href="./Register.php" id="new_account" class="ms-3 signup-btn">Sign Up</a></h6>
                    

                </form>
            </div>
        </div>
    </div>
</body>
</html>