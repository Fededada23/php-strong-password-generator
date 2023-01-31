<?php
require_once "functions.php";
session_start();

if(!empty($passwordLength)){
$_SESSION["randomPassword"]=createPassword($passwordLength, $admittedChars, $repeatChars);
var_dump( $_SESSION["randomPassword"]);
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
  <div class="container border rounded-4 py-3 px-5">
    <legend class="fs-1 fw-1">Genera Password:</legend>
    <form>

      <div class="form-group row">
        <label for="password-length" class="col-5 col-form-label">Specifica da quanti caratteri deve essere formata la tua password</label>
        <div class="col-7 ">
          <input type="number" class="form-control" id="password-length" name="password-lenght" value="<?php echo isset($_GET["password-lenght"]) ? $_GET["password-lenght"] : "" ?>">
        </div>
      </div>

      <fieldset class="form-group">
        <legend class="col-form-label col-sm-2 pt-0 fs-2 fw-2">Preferenze:</legend>

        <div class="row py-3 border-bottom">
          <legend class="col-form-label col-sm-2 pt-0 ">carattri ammessi:</legend>

          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" <?php echo isset($_GET["alphabet"]) ? "checked" : "" ?> name="alphabet" id="alphabet-chars" value="true">
              <label class="form-check-label" for="alphabet-chars">
                Lettere
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" <?php echo isset($_GET["integers"]) ? "checked" : "" ?> name="integers" id="integer-chars" value="true">
              <label class="form-check-label" for="integer-chars">
                Numeri
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" <?php echo isset($_GET["symbols"]) ? "checked" : "" ?> name="symbols" id="symbols-chars" value="true">
              <label class="form-check-label" for="symbols-chars">
                Simboli
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row  py-3 border-bottom">
        <div class="col-sm-2">ripetizioni:</div>
        <div class="col-sm-10">
          <div class="form-check">
            <!-- non riesco!!!! -->
            <input class="form-check-input" type="radio" id="repeat-true" name="repeat" value="1" <?php echo $repeatChars ? "checked" : "" ?>>
            <label class="form-check-label" for="repeat-true">
              permesse
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" id="repeat-false" name="repeat" value="0" <?php echo !$repeatChars ? "checked" : "" ?>>
            <label class="form-check-label" for="repeat-false">
              negate
            </label>
          </div>
        </div>
      </div>
      <div class="form-group row py-3">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-secondary mx-2"><a href="index.php" class="text-light text-decoration-none">Cancella</a></button>
          <button type="submit" class="btn btn-primary mx-2">Genera</button>
        </div>
      </div>
    </form>
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