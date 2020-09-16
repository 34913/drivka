<?php
    include("var.php");
    //header("Content-Type: text/html; charset=windows-1250");

    function make_seed()
    {
        list($usec, $sec) = explode(' ', microtime());
        return $sec + $usec * 1000000;
    }
    srand(make_seed());

    $obejit = $_POST["hodnota"];
    $trida = $_POST["trida"];

    $connect = mysqli_connect($host, $usrn, $psw, $dbName);
    if($obejit == 1)
        $sql = "SELECT * FROM seznamzaku WHERE trida = ".$trida." ORDER BY id ASC";
    else
        $sql = "SELECT * FROM seznamzaku WHERE trida = ".$trida." AND vyvolan = 0 ORDER BY id ASC";

    $result = mysqli_query($connect, $sql);
    if(!$result)
        die(mysqli_error($connect));

    $rows = mysqli_num_rows($result);

    if($rows == 0){
        die(0);
    }

    $random =  rand(1, $rows);
    $count = 1;

    while($row = mysqli_fetch_array($result)){
        if($count != $random){
            $count++;
            continue;
        }

        $jmeno = $row["jmeno"];
        if($obejit == 0) {
            $sql = "UPDATE seznamzaku SET vyvolan = 1 WHERE id = ".$row["id"];;
            $druhy = mysqli_query($connect, $sql);
            if(!$druhy)
                die(mysqli_error($connect));

        }

        break;
    }
    echo $jmeno;

   
    mysqli_close($connect);
?>