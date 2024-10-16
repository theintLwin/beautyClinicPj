<?php
    
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
        echo "Connected";
        
            $id = $_GET['id'];

            $sql = "DELETE FROM doctors_list   WHERE ID = $id";
          
             //    sqli_query(connection, query) true false
             if(mysqli_query($connection, $sql)){
                 header("location:admin/doctor.php");
             }else{
                 echo "Query fail!".mysqli_error();
             }
            }
            
     
            
         

    
?>
?>