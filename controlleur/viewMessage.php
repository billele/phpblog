<?php
//require ('../view/index.html');
require ('../model/comment.php');
$instance = new comment($_POST['text'],$bdd);
$instance->viewMessage();
require ('../view/index.php');
