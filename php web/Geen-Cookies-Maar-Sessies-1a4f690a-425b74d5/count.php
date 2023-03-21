<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p>
aantal bezoeken:

<?php

if (isset($_SESSION['eerder-gezien'])) {
    $aantal_keer = $_SESSION['eerder-gezien'] + 1;
} else {
    $aantal_keer = 0;
}
echo $aantal_keer;
$_SESSION['eerder-gezien'] = $aantal_keer;

?>


  </p>  
</body>
</html>