<?php
    include("var.php");
    header("Content-Type: text/html; charset=windows-1250");

    $trida = $_POST["trida"];

    $connect = mysqli_connect($host, $usrn, $psw, $dbName);
    $sql = "UPDATE seznamzaku SET vyvolan = 0 WHERE trida = ".$trida." AND vyvolan = 1";

    $result = mysqli_query($connect, $sql);

    if(!$result)
        die(mysqli_error($connect));

    echo "vynulováno";
    mysqli_close($connect);

?>