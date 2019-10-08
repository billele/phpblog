<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=minitchat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


class comment
{
  private $message;
  private $id;

  function __construct($message,$bdd)
  {
    $this->message = $message;
    $this->bdd = $bdd;
  }

  function getMessage()
  {
    return $this->message;
  }

  function setMessage($message)
  {
    $this->message = $message;
  }

  function saveMessage($user_id)
  {
    $req=$this->bdd->prepare("INSERT INTO comment(name,user_id) VALUES (:name,:id)");
    $req->execute(array(
      'name'=> $this->getMessage(),
        'id'=> $user_id
    ));
    echo "Message enregistrer";
  }
  function viewMessage()
  {
    $req=$this->bdd->prepare('SELECT * FROM comment ORDER BY ID ASC LIMIT 0, 10');
    $req->execute(array());
    $donnees= $req->fetch();
    var_dump($donnees['name']);
      return $donnees['name'];

    }

}
