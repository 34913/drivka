<?php
    include("var.php");

    $trida = $_POST["trida"];

    $connect = mysqli_connect($host, $usrn, $psw, $dbName);
    $sql = "SELECT * FROM tridy WHERE id = ".$trida;
    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    $row = mysqli_fetch_array($result);
    echo '<h2 id="misto" name="'.$row["id"].'">'.$row["jmeno"].'</h2>';
    
    mysqli_close($connect);

?>