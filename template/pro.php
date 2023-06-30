<?php
include '../header/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Asset/Css/stylepro.css">
    <title>Espace pro</title>
</head>
<body>
<main class="container">

<section class="row" id="image_contact">

        <div class="col-sm-2 col-lg-2 p-5 px-2 m-2">
            <img class="img-responsive img-rounded" src="../Asset/Images/photo-1608039649006-df579ad70c64.jpg" alt="Image">
        </div>
        
    <div class="col-sm-6 col-lg-5 offset-lg-2 bg-primary rounded px-5 px-lg-5 py-5">

        <h1 class="h2 col-12 text-white text-center mb-5">Espace pro</h1>

        <div class="mb-5">
      <label for="email" class="form-email-label required">Email :</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="mb-5">
      <label for="password" class="form-password-label required">Password :</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
    </div>
           
            <button type="submit" class="btn btn-outline-danger w-100 mb-4">S'incrire</button>
        <a href="../template/Home.php" class="btn w-100 btn-outline-light w-100 mb-4">Annuler</a>          
    </div>
  

   
</section>
</body>
</html>