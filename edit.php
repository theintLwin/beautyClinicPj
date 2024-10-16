<?php
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
        echo "Connected";
        if(isset($_POST['addDoctor'])){
            $id = $_POST['editId'];
            $docName = $_POST['editName'];
            $docEmail = $_POST['editEmail'];
            $docPh = $_POST['editPhone'];
            $timefrom = $_POST['timefrom'];
            $timeto = $_POST['timeto'];

                if(isset($_FILES['editfileToUpload']) ){
                    $filename = $_FILES["editfileToUpload"]["name"];
            $tempname = $_FILES["editfileToUpload"]["tmp_name"];
            $folder = "./db_image/" . $filename;
            move_uploaded_file($tempname, $folder);
             $sql = "UPDATE doctors_list SET Name='$docName', Phone_Number ='$docPh', Email='$docEmail', Image ='$filename',time_from= '$timefrom', time_to='$timeto' WHERE ID = $id ";
                }else{
                    $sql = "UPDATE doctors_list SET Name='$docName', Phone_Number='$docPh', Email = '$docEmail', time_from= '$timefrom' ,time_to = '$timeto' WHERE ID = $id ";
                }
             //    sqli_query(connection, query) true false
             if(mysqli_query($connection, $sql)){
                 header("location:admin/doctor.php");
             }else{
                 echo "Query fail!".mysqli_error();
             }
            }
     
            
         }

    
?>