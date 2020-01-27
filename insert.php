<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mssg = $_POST['message'];
$phone = $_POST['phone'];
if (!empty($name) || !empty($email) || !empty($mssg) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "brcontact";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
     $INSERT = "INSERT Into brcontacts (name,email, mssg, phone) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($INSERT);
     
     $stmt->execute();
   
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name, $email, $mssg, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already registered using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All fields are required";
 die();
}
?>