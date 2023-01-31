<?php
$passwordLength = $_GET["password-lenght"] ??  "";

$repeatChars = $_GET["repeat"] ?? false;

$charsList = [
  [
    "name" => "alphabetLowercase",
    "chars" => "abcdefghilmnopqrstuvwxyz",
    "isIncluded" => $_GET["alphabet"] ??  false,
  ],
  [
    "name" => "alphabetUppercase",
    "chars" => "ABCDEFGHILMNOPQRSTUVWXYZ",
    "isIncluded" => $_GET["alphabet"] ??  false,
  ],
  [
    "name" => "integers",
    "chars" => "0123456789",
    "isIncluded"  => $_GET["integers"] ?? false,
  ],
  [
    "name" => "symbols",
    "chars" => "+-_/|\£%&?^@#*§ç>°",
    "isIncluded"  => $_GET["symbols"] ?? false,
  ],
];

$admittedChars = "";
foreach ($charsList as $charsType) {
  if ($charsType["isIncluded"]) {
    $admittedChars .= $charsType["chars"];
  }
}
function createPassword($passwordLength, $admittedChars, $repeatChars)
{

  $randomPassword = "";
  while (strlen($randomPassword) < $passwordLength) {
    $randomIndex = rand(0, strlen($admittedChars) - 1);

    if ($repeatChars == false) {

      if (!str_contains($randomPassword, $admittedChars[$randomIndex])) {
        $randomPassword .= $admittedChars[$randomIndex];
      }
    } else {
      $randomPassword .= $admittedChars[$randomIndex];
    }
  }
  return $randomPassword;
};
