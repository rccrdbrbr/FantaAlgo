<?php

function fetchPunteggi($conn)
{
    $sql= "SELECT * FROM PunteggiGiornate; ";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../product-list.php?error=stmtfailed");
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
