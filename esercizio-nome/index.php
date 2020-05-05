<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $name = $_GET["name"];
    $surname = $_GET["surname"];
  ?>


  <h1>Ciao <?php echo $name . ' ' . $surname ?></h1>

  

</body>
</html>