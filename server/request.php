<?php
session_start();
include '../common/db.php';
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];

    $user = $conn->prepare("INSERT INTO users 
    (id,username,email,password,address) 
    VALUES (NULL,'$username','$email','$password','$address');
    ");
    $result = $user->execute();
    if($result){
        echo "User registered successfully";
        $_SESSION['user'] = ["username"=>$username,"email"=>$email];
        header("location: /talk-about");
    }
    else{
        echo "Error: " . $conn->error;
    }

} else if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username="";
    $query = "select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
        foreach($result as $row){
            $username = $row['username'];
        }
        echo $username ;
        $_SESSION["user"] = ["username"=>$username,"email"=>$email];
        header("location: /talk-about");
    }
} else if(isset($_GET['logout'])){
    session_unset();
    header("location: /talk-about");
}

?>