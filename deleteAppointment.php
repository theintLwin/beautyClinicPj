<?php
    
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
        echo "Connected";
        
            $id = $_GET['id'];

            $sql1 = "DELETE FROM appointment_list WHERE Aid = $id";
          
             //    sqli_query(connection, query) true false
             if(mysqli_query($connection, $sql1)){
                 header("location:admin/appointment.php");
             }else{
                 echo "Query fail!".mysqli_error();
             }
            }  
?>