<?php session_start();?>
<? require ('../controlleur/commentControl.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Le blog commentaire</h1>
<div>
  <?php
  if (!isset($_SESSION['login'])) {?>

  <form class="" action="../controlleur/identifiant.php" method="post">
    <label for="id">identifiant</label>
    <input type="text" name="user" value="user">
    <input type="password" name="password" value="password">
    <input type="submit" name="envoyer" value="envoyer">
  </form>
<?php }else {?>
  <div >
    <form class="" action="../controlleur/destroySession.php" method="post">
  <input type="submit" name="" value="deconexion">
    </form>
  </div>
<?php } ?>
</div>

<div class="Creat">
  <a href="creationUser.html">Cliquez ici pour crée votre compte</a>
</div>
    </div>
    <div class="">
      <!-- ici on envoie le message a sauvegarder et aussi a afficher -->
      <form class="" action="../controlleur/commentControl.php" method="post">
        <label for="message">message</label>
        <input type="text" name="text" value="text">
        <input type="submit" name="envoyer" value="envoyer">
      </form>
    </div>
    <form class="" action="../controlleur/viewMessage.php" method="post">
      <input type="submit" name="messagege" value="voir mesasge">
    </form>
<!-- <?php echo('f'.$_COOKIE['Viewmessage']); ?> -->
  </body>
</html>
