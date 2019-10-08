<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minitchat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


class ClassName
{

	private $username;
	private $password;
	private $createdAt;
	private $updatedAt;

	function __construct($username = null,$password = null,$bdd)
	{
		// $this->id = $id;
		$this->username = $username;
		$this->password = $password;
		$this->createdAt = new DateTime();
		$this->updatedAt = new DateTime();
		$this->bdd = $bdd;
	}

	function setUsername($username){
		$this->username = $username;
	}
	function getUsername(){
		return $this->username;
	}


	function setPassword($password){
		$this->password = $password;
	}
	function getPassword(){
		return $this->password;
	}
	function saveInDataBase(){
		if ($this->load() == true){//avan
		}else{
			$req = $this->bdd->prepare('INSERT INTO user (name,password) VALUES(:user,:mdp)');
			$req->execute(array(
				'user' => $this->getUsername(),
				'mdp' => $this->getPassword()
			));
			echo "compte crée";

		}
	}
	function load(){
		$reponse = $this->bdd->prepare('SELECT * FROM user WHERE (:name)');
		$reponse->execute(array(
			'name'=>$this->username
		));
		while ($donnees= $reponse->fetch()){
			return true;
		}

	}
	function loadAllDonne(){
		$req = $this->bdd->prepare('SELECT * FROM user WHERE (id AND name = :name AND password= :password)');

		$req->execute(array(
			'name'=>$this->getUsername(),
			'password'=>$this->getPassword()
		));
		$count= $req->rowcount();
		if ($req->rowCount() > 0)
		{
			while ($donnees= $req->fetch()){
				$this->id = $donnees['id'];
				return true;
			};
		} else {
			echo "erreur identifiant";
		}

	}

	function Connect(){

		if ($this->loadAllDonne() == true){
			session_start();
			$_SESSION['login'] = $this->username;
			$_SESSION['id'] = $this->id;
			echo 'vous êtes maintenant connecté en tant que '.$_SESSION['login'];

		}
		function destroy()
		{
			session_destroy();
			echo "vous etes déconnecté";
			header("refresh:3;url=../inde.php");
		}
		function countLikeByThisUser(){
			//select where name = username
		}
	}
}
