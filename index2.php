<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

$mail = $_GET["mail"];

if ((strpos($mail, "@") !== false) && (strpos($mail, ".") !== false)) {
  echo "<div>OK</>";
} else {
  echo "<div>KO</>";
}

?>
  
</body>
</html>