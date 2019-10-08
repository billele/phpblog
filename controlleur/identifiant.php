<?php

require ('../model/usermodel.php');

$instance = new ClassName( $_POST['user'], $_POST['password'],$bdd);
$instance->Connect();

header("refresh:5;url=../view/index.php");
