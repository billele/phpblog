<?php
session_start();
//require ('../view/index.html');
require ('../model/comment.php');
require ('../model/usermodel.php');
$instance = new comment($_POST['text'],$bdd);
$instance->saveMessage($_SESSION['id']);
header("refresh:5;url=../view/index.php");
