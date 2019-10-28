<?php
require ('../model/comment.php');
setcookie('viewmessage',$x);
$instance = new comment('y',$bdd);
$x= $instance->viewMessage();
var_dump($x);
// header("refresh:5;url=../view/index.php");
require ('../view/index.php');
