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

    if (isset($_GET['signup']) && (!isset($_SESSION['user']['username']))) {
        include 'client/signup.php';
    } else if (isset($_GET['login']) && (!isset($_SESSION['user']['username']))) {
        include 'client/login.php';
    } else if (isset($_GET['ask'])){
        include 'client/ask.php';
    } else if (isset($_GET['q-id'])){
        $qid = $_GET['q-id'];
        include 'client/question-details.php';
    } else if ($_GET['c-id']) {
      $cid = $_GET['c-id'];
      include('client/questions.php');
    } else if ($_GET['u-id']) {
      $uid = $_GET['u-id'];
      include('client/questions.php');
   } else if ($_GET['latest']) {
      include('./client/questions.php');
   }
    else {
        include 'client/questions.php'; 
    } 
    ?>


</body>

</html>