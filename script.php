<?php
$email= $_post['email'];
$password = $_post['password'] ;


// data base connection
$con= new mysqli("localhost","root","root","test");
 if($con->connect_error){
    die("failed to connect:".$con->connect_error);
 }else{
    $stmt=$con->prepare("select * from registration where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result->num_rows > 0){
         $data= $stmt_result->fetch_assoc();
         if($data['password'] === $password){
            echo "<h2> login successfully</h2>";
         }else{
            echo "<h2>invalid email or password</h2>";
         }
    }else{
        echo "<h2> invalid  email or password</h2>";
    }
 }

?>