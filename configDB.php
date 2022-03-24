<?php

  try {
    $dsn = 'mysql:host=localhost;dbname=todolist';
    $pdo = new PDO($dsn, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed : ".$e->getMessage();
  }
?>