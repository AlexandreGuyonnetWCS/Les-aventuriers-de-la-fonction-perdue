<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form method="post">
    <input type="string" id="animal" name="animal" placeholder="animal">
    <input type="string" id="element" name="element" placeholder="element">
    </select>
    <button type="submit" value="OK">Envoyer</button>

</body>

</html>

<?php

$animals = ($_POST["animal"]);
$elements = ($_POST["element"]);

function writeSecretSentence(string $animals , string $elements):string
{
  return  "$animals s'incline face à $elements";
}

writeSecretSentence($animals, $elements);

?>




