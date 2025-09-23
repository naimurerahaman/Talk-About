<!DOCTYPE html>
<html lang="en">
<head>
    <title>Talk About</title>
    <?php include 'client/commonFiles.php'; ?>
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
    <?php 
    session_start();
    include('client/header.php'); 

    if(isset($_GET['signup']) && !$_SESSION['user']['username']){
        include 'client/signup.php';
    }
    else if(isset($_GET['login']) && !$_SESSION['user']['username']){
        include 'client/login.php';
    }
    else{
        //
    }

    ?>

</body>    
</html>