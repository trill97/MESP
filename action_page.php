<?php




   $uname = $_POST['uname'];    
    $email = $_POST['mail'];
    $tel = $_POST['pw'];
  
    
   

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "signup";

    $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName); 

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'
        .mysqli_connect_error());
    }
    else
    {
        $sql = "INSERT INTO sign (uname,mail,password)
            values('$uname','$mail','$pw') ";
        
     
      if($conn->query($sql)){
        header('Location: signup.html');
        
      }
      else{
          echo "Error:" .$sql."<br>".$conn->error;
      }
     $conn->close();
    }
?>