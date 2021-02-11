<?php

  include "dbh.inc.php";
  include "../functions/functions-table.inc.php";

  $giornate= fetchPunteggi($conn);
  $acph=0; $dntrh=0; $kkbbh=0; $nazih=0;
  $sqafh=0; $tmbzh=0; $vdgh=0; $wddh=0;
  $acpa=0; $dntra=0; $kkbba=0; $nazia=0;
  $sqafa=0; $tmbza=0; $vdga=0; $wdda=0;

  while ($row = mysqli_fetch_assoc($giornate)) {
      $acph=intval(($row["ACP"]-65.5)/5+1);
      $acpa=intval(($row["ACP"]-65)/5+1);
      $dntrh=intval(($row["DNTR"]-65.5)/5+1);
      $dntra=intval(($row["DNTR"]-65)/5+1);
      $kkbbh=intval(($row["KKBB"]-65.5)/5+1);
      $kkbba=intval(($row["KKBB"]-65)/5+1);
      $nazih=intval(($row["NAZI"]-65.5)/5+1);
      $nazia=intval(($row["NAZI"]-65)/5+1);
      $sqafh=intval(($row["SQAF"]-65.5)/5+1);
      $sqafa=intval(($row["SQAF"]-65)/5+1);
      $tmbzh=intval(($row["TMBZ"]-65.5)/5+1);
      $tmbza=intval(($row["TMBZ"]-65)/5+1);
      $vdgh=intval(($row["VDG"]-65.5)/5+1);
      $vdga=intval(($row["VDG"]-65)/5+1);
      $wddh=intval(($row["WDD"]-65.5)/5+1);
      $wdda=intval(($row["WDD"]-65)/5+1);
      //echo $acph, $acpa;
      //echo "<br>";
      fillTableA($conn, $row["Giornata"], $acph, $dntrh, $kkbbh, $nazih, $sqafh, $tmbzh, $vdgh, $wddh);
      fillTableH($conn, $row["Giornata"], $acpa, $dntra, $kkbba, $nazia, $sqafa, $tmbza, $vdga, $wdda);
  }
