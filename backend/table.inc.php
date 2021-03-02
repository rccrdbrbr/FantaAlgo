<?php      include "dbh.inc.php";
  include "functions/functions-table.inc.php";
      $giornate= fetchPunteggi($conn) ?>

    <div class="container">
        <div class="row">
          <h5>Punteggi per giornata</h5>
          <div class="wrap-table100">
            <div class="table100 ver1">
              <div class="table100-firstcol">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column2">Giornata</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = mysqli_fetch_assoc($giornate)) {
          ?>
                    <tr class="row100 body">
                      <td class="cell100 column2"><?php echo $row["Giornata"] ?></td>
                    </tr>
                    <?php
      } ?>

                    <!--<tr class="row100 body">
                      <td class="cell100 column1">Kathy Daniels</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Elizabeth Alvarado</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Michael Coleman</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Jason Cox</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Christian Perkins</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Emily Wheeler</td>
                    </tr>
                  -->
                  </tbody>
                </table>
              </div>

              <div class="wrap-table100-nextcols js-pscroll">
                <div class="table100-nextcols">
                  <table>
                    <thead>
                      <tr class="row100 head">
                        <th class="cell100 column2">ACP</th>
                        <th class="cell100 column3">DNTR</th>
                        <th class="cell100 column4">KKBB</th>
                        <th class="cell100 column5">NAZI</th>
                        <th class="cell100 column6">SQAF</th>
                        <th class="cell100 column7">TMBZ</th>
                        <th class="cell100 column8">VDG</th>
                        <th class="cell100 column8">WDD</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  $giornate= fetchPunteggi($conn);
                       while ($row = mysqli_fetch_assoc($giornate)) { ?>
                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $row["ACP"] ?></td>
                        <td class="cell100 column3"><?php echo $row["DNTR"] ?></td>
                        <td class="cell100 column4"><?php echo $row["KKBB"] ?></td>
                        <td class="cell100 column5"><?php echo $row["NAZI"] ?></td>
                        <td class="cell100 column6"><?php echo $row["SQAF"] ?></td>
                        <td class="cell100 column7"><?php echo $row["TMBZ"] ?></td>
                        <td class="cell100 column8"><?php echo $row["VDG"] ?></td>
                        <td class="cell100 column8"><?php echo $row["WDD"] ?></td>
                      </tr>
                    <?php } ?>
                      <!--
                      <tr class="row100 body">
                        <td class="cell100 column2">Marketing</td>
                        <td class="cell100 column3">16 Nov 2015</td>
                        <td class="cell100 column4">30 Nov 2017</td>
                        <td class="cell100 column5">kathy_82@example.com</td>
                        <td class="cell100 column6">26</td>
                        <td class="cell100 column7">New York City, NY</td>
                        <td class="cell100 column8">424242xxxxxx1616</td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">CFO</td>
                        <td class="cell100 column3">16 Nov 2013</td>
                        <td class="cell100 column4">30 Nov 2017</td>
                        <td class="cell100 column5">elizabeth82@example.com</td>
                        <td class="cell100 column6">32</td>
                        <td class="cell100 column7">New York City, NY</td>
                        <td class="cell100 column8">424242xxxxxx5326</td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">Designer</td>
                        <td class="cell100 column3">16 Nov 2013</td>
                        <td class="cell100 column4">30 Nov 2017</td>
                        <td class="cell100 column5">michael94@example.com</td>
                        <td class="cell100 column6">22</td>
                        <td class="cell100 column7">New York City, NY</td>
                        <td class="cell100 column8">424242xxxxxx6328</td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">Developer</td>
                        <td class="cell100 column3">16 Nov 2017</td>
                        <td class="cell100 column4">30 Nov 2017</td>
                        <td class="cell100 column5">jasoncox@example.com</td>
                        <td class="cell100 column6">25</td>
                        <td class="cell100 column7">New York City, NY</td>
                        <td class="cell100 column8">424242xxxxxx7648</td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">Sale</td>
                        <td class="cell100 column3">16 Nov 2016</td>
                        <td class="cell100 column4">30 Nov 2017</td>
                        <td class="cell100 column5">christian_83@example.com</td>
                        <td class="cell100 column6">28</td>
                        <td class="cell100 column7">New York City, NY</td>
                        <td class="cell100 column8">424242xxxxxx4152</td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">Support</td>
                        <td class="cell100 column3">16 Nov 2013</td>
                        <td class="cell100 column4">30 Nov 2017</td>
                        <td class="cell100 column5">emily90@example.com</td>
                        <td class="cell100 column6">24</td>
                        <td class="cell100 column7">New York City, NY</td>
                        <td class="cell100 column8">424242xxxxxx6668</td>
                      </tr>-->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
