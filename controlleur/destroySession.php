<?php
 require ('../model/usermodel.php');
session_start();
 session_destroy();
   echo "vous etes déconnecté";
   header("refresh:3;url=../view/index.php");
