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
    echo $user->insert_id;
    if($result){
        echo "User registered successfully";
        $_SESSION["user"] = ["username"=>$username,"email"=>$email,"user_id"=>$user->insert_id];
        header("location: /talk-about");
    }
    else{
        echo "Error: " . $conn->error;
    }

} else if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username="";
    $user_id=0;
    $query = "select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
        foreach($result as $row){
            $username = $row['username'];
            $user_id = $row['user_id'];
        }
        $_SESSION["user"] = ["username"=>$username,"email"=>$email,"user_id"=>$user_id];
        header("location: /talk-about");
    }
} else if(isset($_GET['logout'])){
    session_unset();
    header("location: /talk-about");
} else if(isset($_POST['ask'])){

    $title=$_POST['title'];
    $description=$_POST['description'];
    $category_id=$_POST['category'];
    $user_id=$_POST['user']['user_id'];

    $question = $conn->prepare("INSERT INTO questions 
    (id,title,description,category_id,user_id) 
    VALUES (NULL,'$title','$description','$category_id','$user_id');
    ");
    $result = $question->execute();
    $question -> $user_id;
    if($result){
        
        header("location: /talk-about");
    }
    else{
        echo "Question not added to website";
    }
}

?>