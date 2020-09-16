<?php
    include("var.php");

    $trida = $_POST["trida"];
    $connect = mysqli_connect($host, $usrn, $psw, $dbName);
    $sql = "SELECT * FROM tridy ORDER BY id ASC";

    $result = mysqli_query($connect, $sql);
    if(!$result)
        die(mysqli_error($connect));

    $tisk = "";
    $tisk = '<span class="btnTrida">';
    $tisk .= '<select style="font-size:20px" id="tridaName">';
    while($row = mysqli_fetch_array($result)) {
        $tisk .= '<option value="'.$row["id"].'">'.$row["jmeno"].'</option>';
    }
    $tisk .= '</select></span>';
    echo $tisk;

    mysqli_close($connect);

?>