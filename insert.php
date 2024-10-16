<?php
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
        echo "Connected";
        if(isset($_POST['addDoctorBtn'])){
        
            $docName = $_POST['doctorName'];
            $docPh = $_POST['doctorPhone'];
            $docEmail = $_POST['doctorEmail'];
            $docTimeFrom = $_POST['timeFrom'];
            $docTimeTo = $_POST['timeTo'];
            $filename = $_FILES["fileToUpload"]["name"];
            $tempname = $_FILES["fileToUpload"]["tmp_name"];
            $folder = "./db_image/" . $filename;
            move_uploaded_file($tempname, $folder);
            if($docName == null || $docPh == "" || empty($docEmail)){
                header("Location: admin/doctor.php");
            }else{
             $sql = "INSERT INTO doctors_list (Name, Phone_Number, Email,Image,time_from,time_to)  VALUES ('$docName', '$docPh', '$docEmail','$filename','$docTimeFrom','$docTimeTo')";
     
             //    sqli_query(connection, query) true false
             if(mysqli_query($connection, $sql)){
                 header("location:admin/doctor.php");
             }else{
                 echo "Query fail!".mysqli_error();
             }
            }
     
            
         }

    }
?>