<?php
 $id = $_POST['doctor_id'];
 $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

 if(!$connection){
     echo "db connect fail!".mysqli_connection_error();
 }else{
    $sql = "SELECT * FROM doctors_list WHERE ID = $id ";


    $query = mysqli_query($connection, $sql);
    
    //echo "<pre>";
    // var_dump($query);
    $row = mysqli_fetch_assoc($query);

    
    $uid= $_POST['user_id'];
    $name = $row['Name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    // session_start();
    // $uids =  $_SESSION["userId"];

    $sql3 = "SELECT * FROM user_registered_list WHERE u_id = $uid ";

    $query1 = mysqli_query($connection, $sql3);
   
    $row = mysqli_fetch_assoc($query1);
    $userName = $row['Name'];

    $sql4 = "INSERT INTO appointment_list (Did, Cid,Doctor_Name, Customer_Name,Date,Time) VALUES ($id, $uid,'$name','$userName','$date','$time')";
          
    //    sqli_query(connection, query) true false
    if(mysqli_query($connection, $sql4)){
        $success = " Appointment successfully!";
        setcookie("appointment",$success, time()+30);
        
        header("location:./loginUserDoctors.php?uid=$uid");
        
    }else{
        echo "Query fail!".mysqli_error();
    }
 }
?>