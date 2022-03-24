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
        <input type="string" id="animal" name="animal" value="animal">
        <input type="string" id="element" name="element" value="element">
        </select>
        <button type="submit" value="OK">Envoyer</button>

        </body>
</html>

<?php 


function writeSecretSentence ($animals , $elements )
{
  return  $animals . $elements;
}
echo $_POST["animal"] . " s'incline face à " . $_POST["element"];

?>




