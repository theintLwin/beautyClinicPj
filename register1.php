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
                    $sql1 = "SELECT * FROM user_registered_list WHERE Email='$userEmail' AND Password= '$userPw' ";
                    $query1 = mysqli_query($connection, $sql1);
                    //echo "<pre>";
                    // var_dump($query);
                    $row = mysqli_fetch_assoc($query1);
                    $uid=$row['u_id'];
                    //echo $uid;
                    // $numsOfRow = mysqli_num_rows($query);
                    header("location:loginUserDoctors.php?uid=$uid");

                  }else{
                      echo "Query fail!".mysqli_error();
                  }
                 }
          
                 
              }
     
         
    ?>