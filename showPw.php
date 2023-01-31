<?php
require_once "functions.php";
session_start();

if (!empty($passwordLength)) {
  $_SESSION["randomPassword"] = createPassword($passwordLength, $admittedChars, $repeatChars);
  var_dump($_SESSION["randomPassword"]);
  header("Location:showPw.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container d-flex justify-content-center text-center">
    <div class="w-75 border rounded-4 p-5 ">
      <h2>La tua nuova password è:</h2>
      <h1 class="text-primary"><?php echo $_SESSION["randomPassword"] ?></h1>
    </div>
  </div>
</body>

</html>

<style>
  body {
    font-family: 'Roboto', sans-serif;
  }

  .container {
    margin-top: 100px;
  }
</style>