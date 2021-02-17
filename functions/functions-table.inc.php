<?php

function fetchPunteggi($conn)
{
    $sql= "SELECT * FROM punteggigiornate; ";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmt);

    $dati= mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($dati) > 0) {
        return $dati;
    } else {
        $risultato=false;
        return $risultato;
    }

    mysqli_stmt_close($stmt);
}

function fillTableH($conn, $giornata, $acph, $dntrh, $kkbbh, $nazih, $sqafh, $tmbzh, $vdgh, $wddh)
{
    $h="H";
    $sql= "INSERT INTO puntiha (Giornata, HomeAway, ACP, DNTR, KKBB, NAZI, SQAF, TMBZ, VDG, WDD) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Errore nella query";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "isiiiiiiii", $giornata, $h, $acph, $dntrh, $kkbbh, $nazih, $sqafh, $tmbzh, $vdgh, $wddh);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../index.php?error=none");
}

function fillTableA($conn, $giornata, $acph, $dntrh, $kkbbh, $nazih, $sqafh, $tmbzh, $vdgh, $wddh)
{
    $h="A";
    $sql= "INSERT INTO puntiha (Giornata, HomeAway, ACP, DNTR, KKBB, NAZI, SQAF, TMBZ, VDG, WDD) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Errore nella query";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "isiiiiiiii", $giornata, $h, $acph, $dntrh, $kkbbh, $nazih, $sqafh, $tmbzh, $vdgh, $wddh);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
}
