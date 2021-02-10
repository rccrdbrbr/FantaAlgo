<?php

function ControlloPwd($pwd1, $pwd2)
{
    $risultato;
    if ($pwd1 !== $pwd2) {
        $risultato=true;
    } else {
        $risultato=false;
    }
    return $risultato;
}

function UsernameEsiste($conn, $username)
{
    $sql= "SELECT * FROM utenti WHERE Username= ? ;";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $dati= mysqli_stmt_get_result($stmt);

    if ($riga= mysqli_fetch_assoc($dati)) {
        return $riga;
    } else {
        $risultato= false;
        return $risultato;
    }

    mysqli_stmt_close($stmt);
}

function CreaUtente($conn, $name, $surname, $sqname, $username, $pwd1)
{
    $sql= "INSERT INTO utenti (Nome, Cognome,  NomeSquadra, Username, Pwd) VALUES (?, ?, ?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed2");
        exit();
    }

    $hashPwd = password_hash($pwd1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $surname, $sqname, $username, $hashPwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
}

function LoginUser($conn, $username, $pwd)
{
    $usernameEsiste= UsernameEsiste($conn, $username);

    if ($usernameEsiste === false) {
        header("location: ../login.php?error=wronglogin1");
        exit();
    }

    $hashPwd= $usernameEsiste["Pwd"];
    $controllaPwd= password_verify($pwd, $hashPwd);

    if ($controllaPwd===false) {
        header("location: ../login.php?error=wronglogin2");
        exit();
    } elseif ($controllaPwd===true) {
        session_start();
        $_SESSION["Username"]= $usernameEsiste["Username"];
        header("location: ../index.php");
        exit();
    }
}
