<?php session_start() ?>
<?php include 'class/userClass.php'; ?>
<?php use barlaKarime\userSystem as user ?>
<?php $userSystem = new user\userClass()?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form action="procesos/user.php" method="POST">
      <input type="text" id="user" name="user" placeholder="digite usuario">
      <br>
      <input type="password" id="pass" name="pass" placeholder="digite contraseña">
      <br>
      <button type="submit">Validar</button>
    
    <?php if($userSystem->errorUser() === false): ?>
    <p>usuario y contraseña incorrectos</p>
    <?php endif ?>
    </form>
  </body>
</html>
