<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="success.php" method="GET" >
         <?php

            echo "voer een email in <br/>" ;
            echo "meld je aan voor de niewusbrief";

            ?>
  
        <input type="text" name="email" placeholder="E-mail">
        <input type="submit" name="submit" value="aanmelden">
        
    </form>
    
</body>
</html>