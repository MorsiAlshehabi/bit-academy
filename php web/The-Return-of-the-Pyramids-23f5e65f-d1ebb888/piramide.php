<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="400px" cellspacing="0px" cellpadding="0px">
        <?php
        for ($row = 0; $row < 10; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= $row; $col++) {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
            echo "</tr>";
        }
        
        ?>
    </table>

</body>

</html>