<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">

</head>
<body>
<?php
$id = $_GET['id'];
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
        $sql = "SELECT * FROM doctors_list WHERE ID= $id ";


        $query = mysqli_query($connection, $sql);
        //echo "<pre>";
        // var_dump($query);
        $row = mysqli_fetch_assoc($query);
        $id= $row['ID'];
        $name = $row['Name'];
        $email = $row['Email'];
        $ph = $row['Phone_Number'];
        $image = $row['Image'];
        $timefrom = $row['time_from'];
        $timeto= $row['time_to'];
        //var_dump($image);
        echo $timefrom . $timeto;
        


    }
?>
<div class="container-fluid">
 <div class="w-100 d-flex justify-content-center border-2 border-dark" style="background-color:pink;">
 <form  action="edit.php" class=" p-3 h-75 mt-1 fs-5 m-5 " method="POST" enctype="multipart/form-data">
            <input type="hidden">
            <div class="mb-3">
                <input type="hidden" value="<?php echo $id; ?>" name="editId">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="editName" value="<?php echo $name; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="editEmail" value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"  name="editPhone" value="<?php echo $ph; ?>">
                </div>

                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Time From</label>
                        <input type="text" class="form-control" name="timefrom"  value="<?php echo $timefrom ?>">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Time To:</label>
                        <input type="text" class="form-control" name="timeto"  value="<?php echo $timeto; ?>" >
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Select image to upload:</label>
                        <input type="file" class="form-control" name="editfileToUpload" id="fileToUpload" >
                </div>
                <div>
                    <img src="./db_image/<?php  echo $image;  ?>" alt="" width="200px" >
                </div>
                <input type="submit" value="Add" class="btn btn-primary mb-3 mt-4 purpleColor" name="addDoctor">
                
                    

            </form>
 </div>
</div>

<?php
    $connection = mysqli_connect('localhost','root','','beauty_clinic_db');

    if(!$connection){
        echo "db connect fail!".mysqli_connection_error();
    }else{
        
        if(isset($_POST['addDoctor'])){
            $id = $_POST['editId'];
            $docName = $_POST['editName'];
            $docEmail = $_POST['editEmail'];
            $docPh = $_POST['editPhone'];
            
           

                if(isset($_FILES['editfileToUpload']) ){
                    $filename = $_FILES["editfileToUpload"]["name"];
            $tempname = $_FILES["editfileToUpload"]["tmp_name"];
            $folder = "./db_image/" . $filename;
            move_uploaded_file($tempname, $folder);
             $sql = "UPDATE doctors_list SET Name='$docName', Phone_Number ='$docPh', Email='$docEmail', Image ='$filename' WHERE ID = $id ";
                }else{
                    $sql = "UPDATE doctors_list SET Name='$docName', Phone_Number='$docPh', Email = '$docEmail' Image='$image' WHERE ID = $id ";
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
</body>
</html>