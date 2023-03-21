<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paper</title>
    <style>
        span {
            color: blue;
        }
        form , h1, h2 {
            text-align: center;
        }
        h3 {
            text-align: center;
            border: solid 2px darkgreen;
            width: 200px;
            margin-left: 570px;
        }
        body {
            background-color: darksalmon;
        }
    </style>
</head>
<body>
    <h1>Steen Papeir Schaar</h1>
    <form action="index1.php" method="POST">
        <select name="choice" id="choice">
            <option value="Steen">Steen</option>
            <option value="Papeir">Papeir</option>
            <option value="Schaar">Schaar</option>
        </select>
        <input type="submit" value="shoot" name="shoot">
        <input type="submit" value="Reset" name="Reset">
    </form>
</body>
</html>

<?php
if(empty($_SESSION['your_win'])  &&
    empty($_SESSION['cpu_win'])) {  
    $_SESSION['your_win'] = 0;
    $_SESSION['cpu_win'] = 0;
}

function choosePlayer() {
    
    $choice = $_POST['choice'];
    if ($choice == "Steen" || $choice == "Papeir" || $choice == "Schaar") {
        return $choice;
    }
}

function chooseComputer() { 
    $numberChoice = rand(0, 2);
    if ($numberChoice == 0) {
        return "Steen";
    } 
    if ($numberChoice == 1) {
        return "Papeir";
    }
    return "Schaar";
}

function checkResult($player, $com) {
    if ($player == $com ){
        return 0;
    }
    
    if ($player == "Steen") {
        if ($com == "Schaar") {
            $_SESSION['your_win']++;
            return 1;
        } else {
            $_SESSION['cpu_win']++;
            return 2;
        }
    }

    if ($player == "Papeir") {
        if ($com == "Steen") {
            $_SESSION['your_win']++;
            return 1;
        } else {
            $_SESSION['cpu_win']++;
            return 2;
        }
    }

    if ($player == "Schaar") {
        if ($com == "Papeir") {
            $_SESSION['your_win']++;
            return 1;
        } else {
            $_SESSION['cpu_win']++;
            return 2;
        }
    }
    
}  

function printResult() {
    $kiesSpeler = choosePlayer();
    $kiesCom = chooseComputer();
    $result = checkResult($kiesSpeler, $kiesCom);
    echo "<h2> speler heeft "  . '<span>' . $kiesSpeler . '</span>' . " gekozen! </h2>";
    echo "<h2> computer heeft "  . '<span>' . $kiesCom . '</span>' . " gekozen!</h2>"; 
    if($result == 0) {
        echo "<h2>The result is a Tie!</h2>";
    } else if($result == 1) {
        echo '<h2 style="color: green;">You win!</h2>';
    } else {
        echo '<h2 style="color: red;">The computer win!</h2>';
    }   
}

if (isset($_POST['shoot'])) {
    printResult();
}

if (isset($_POST['Reset'])) {
    session_destroy();
    header('Location:index1.php');
}

?>

<h3>player score = <?php echo $_SESSION['your_win'] ?> </h3>
<h3>computer score = <?php echo $_SESSION['cpu_win'] ?> </h3>
