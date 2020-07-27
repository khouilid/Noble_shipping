<?php 
session_start();
// in this code we change langage that user want , we get what he want from url and push it into session
if(!empty($_GET['lg'])){
  $_SESSION['lg'] = $_GET['lg'];
}
// and here check if sesssion have something if  it is we include the right content
if(!empty($_SESSION['lg'])){
  
  require_once "php/". $_SESSION['lg'] .".php";
}else{
  require_once 'php/anglish.php';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Noble shipping</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="src/style/style.css ">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/d257b03b55.js" crossorigin="anonymous"></script>
    
    </head>
<body>