<?php

function inserisciGiornata($conn, $giornata, $acp, $dntr, $kkbb, $nazi, $sqaf, $tmbz, $vdg, $wdd)
{
    $sql= "INSERT INTO punteggigiornate (Giornata, ACP, DNTR, KKBB, NAZI, SQAF, TMBZ, VDG, WDD) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "idddddddd", $giornata, $acp, $dntr, $kkbb, $nazi, $sqaf, $tmbz, $vdg, $wdd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../insert.php?error=none");
}
