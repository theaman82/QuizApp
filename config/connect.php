<?php

$connect = new mysqli("localhost","root","","quizapp") or die("Error While Connecting");
session_start();

// redirect function
function redirect($page){
    echo "<script>window.open('$page','_self')</script>";
}

// alert function
function msg($msg){
    echo "<script>alert('$msg')</script>";
}

