<?php session_start() ?>
<?php include 'class/securityClass.php'; ?> 
<?php

use barlaKarime\securitySystem as security ?>
<?php $security = new security\securityClass(); ?>
<?php if ($security->validate() === true): ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title></title>
    </head>
    <body>
      <h1>Menu Principal</h1>
      <ul>
        <li><a href="products.php">Ventas</a></li>
        <li>Informe Del Dia</li>
        <li><a href="procesos/out.php">Salir</a></li>
      </ul>
    </body>
  </html>
<?php else: ?>
  <?php header('Location: index.php') ?>
<?php endif ?>