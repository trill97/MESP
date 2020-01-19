<?php




   $uname = $_POST['uname'];    
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $msg = $_POST['Message'];
    
   

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "contactus";

    $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName); 

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'
        .mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO contact (Fullname,Email,Phone,Message)
            values('$uname','$email','$tel','$msg') ";
        
     
      if($conn->query($sql)){
       header('Location: ../index1.html');
        
      }
      else{
          echo "Error:" .$sql."<br>".$conn->error;
      }
     $conn->close();
    }
?>

