<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <h1>calculator</h1>

<?php

if ($_POST) {
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = '';
    if (!is_numeric($first_num)) {
        $error1 = 'Number 1 is not a number!';
        $error2 = 'Number 2 is not a number!';
    } else {
        if (is_numeric($second_num)) {
            switch ($operator) {
                case "Add":
                    $result = $first_num + $second_num;
                    break;
                case "Subtract":
                    $result = $first_num - $second_num;
                    break;
                case "Multiply":
                    $result = $first_num * $second_num;
                    break;
                case "Divide":
                    if ($second_num == 0) {
                        $error2 = 'Division by zero is not allowed!';
                    } else {
                        $result = $first_num / $second_num;
                    }
                    break;
                case "Modulo":
                    if ($second_num == 0) {
                        $error2 = 'Modulos by zero is not allowed!';
                    } else {
                        $result = fmod($first_num, $second_num);
                    }
                    break;
            }
        } else {
            $error2 = 'Number 2 is not a number';
        }
    }
}

?>

<body>
    <div id="page-wrap">
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="text" name="first_num" id="first_num" required="required" value="">
                <?php echo (!isset($error1)) ? '' : "<label style='color:Red'>" . $error1 . "</label>"; ?>
            </p>
            <p>
                <input type="text" name="second_num" id="second_num" required="required" value="" > 
                <?php echo (!isset($error2)) ? '' : "<label style='color:Red'>" . $error2 . "</label>"; ?>

            </p>
            <p>
                <?php echo (!isset($_POST['operator'])) ? '' : "<strong>Operation:</strong>" . $_POST['operator'] . "<br />"; ?>
                <?php echo (!isset($result)) ? '' : "<strong>Result:</strong>" . $result; ?>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
            <input type="submit" name="operator" value="Modulo" />

        </form>
    </div>
</body>

</html>
</body>
</html>