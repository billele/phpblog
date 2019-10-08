<?php

require '../model/usermodel.php';


$instance = new ClassName( $_POST['user'], $_POST['mdp'],$bdd);
$instance->saveInDataBase();
header("refresh:5;url=../view/index.php");
