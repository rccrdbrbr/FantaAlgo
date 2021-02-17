<?php

if (isset($_POST["submit"])) {
    if ($_SESSION["Username"]="Muschio") {
        $giornata=$_POST["giornata"];
        $acp= $_POST["acp"];
        $dntr= $_POST["dntr"];
        $kkbb= $_POST["kkbb"];
        $nazi= $_POST["nazi"];
        $sqaf= $_POST["sqaf"];
        $tmbz= $_POST["tmbz"];
        $vdg= $_POST["vdg"];
        $wdd= $_POST["wdd"];

        require_once 'dbh.inc.php';
        require_once '../functions/functions-insert.inc.php';
        //echo $giornata, $acp, $dntr, $kkbb, $nazi, $sqaf, $tmbz, $vdg, $wdd;
        inserisciGiornata($conn, $giornata, $acp, $dntr, $kkbb, $nazi, $sqaf, $tmbz, $vdg, $wdd);
    } else {
        header("location: ../insert.php");
        exit();
    }
} else {
    header("location: ../insert.php");
    exit();
}
