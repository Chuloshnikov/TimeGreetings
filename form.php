<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['lastname'] = $_POST['lastname'];

$date = date('h:i:s a', time()); 
echo $date . "<br>";

if ($date >= 5 && $date <= 11) {
    echo "Доброе утро " . $_SESSION['name'] . " " . $_SESSION['lastname'] . "<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
} else if ($date >= 11 && $date <= 16) {
    echo "Добрый день " . $_SESSION['name'] . " " . $_SESSION['lastname'] . "<br>";
} else if ($date >= 16 && $date <= 23) {
    echo "Добрый вечер " . $_SESSION['name'] . " " . $_SESSION['lastname'] . "<br>";
} else if ($date > 0 && $date < 5) {
    echo "Добрый ночи " . $_SESSION['name'] . " " . $_SESSION['lastname'] . "<br>";
}


?>