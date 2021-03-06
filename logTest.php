<?php

    session_start();

    if(!$_SESSION['username']) {
        header('location:login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My to-do list</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleIndex.css">   
    <link rel="stylesheet" type="text/css" href="css/styleRegister">
    <style>
        h1#welcome {
            text-align: center;
            margin-top: 25px;
        }
    </style>
  </head>
  <body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="logTest.php">Login Test</a>
        <a class="navbar-brand" id="logout" href="logout.php">logout</a>
      </div>
    </nav>

    <h1 id="welcome">Welcome, <?php echo $_SESSION['username'] ?>!</h1>
  </body>
</html>