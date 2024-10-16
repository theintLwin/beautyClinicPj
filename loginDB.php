<?php
 $connection = mysqli_connect('localhost','root','','beauty_clinic_db');
  if(!$connection){
    echo "db connect fail!".mysqli_connection_error();
}else{
    if(isset($_POST['userLoginBtn']))
    $userEmail = $_POST['userEmail'];
    $userPw = $_POST['pwd'];
    if($userEmail == 'admin@gmail.com' && $userPw == 'admin123'){
        header("location:admin/home.php");
    }else{
    //echo $userEmail . $userPw;
    $sql = "SELECT * FROM user_registered_list WHERE Email='$userEmail' AND Password= '$userPw' ";


    $query = mysqli_query($connection, $sql);
    //echo "<pre>";
    // var_dump($query);
    $row = mysqli_fetch_assoc($query);
    $uid=$row['u_id'];
    //echo $uid;
    $numsOfRow = mysqli_num_rows($query);
   // echo $numsOfRow;
    if($numsOfRow == 1){
        header("location:loginUserDoctors.php?uid=$uid");
        // echo "Success";
    }
   
}
}

?>