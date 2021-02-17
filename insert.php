<?php include "common/header.php"; ?>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="contact-form">
        <div class="col-md-12 col-sm-12">
          <h3 style="color: white"><strong>Inserisci i Punteggi</strong></h3>
          <br>
        </div>
        <form id="insert" action="backend/insert.inc.php" method="post">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <label style="color: white">Numero Giornata</label>
              <fieldset>
                <input name="giornata" type="number" id="giornata" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">AC Pumalibre</label>
              <fieldset>
                <input name="acp" type="number" id="acp" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Dinamo Tora</label>
              <fieldset>
                <input name="dntr" type="number" id="dntr" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Kiss Kiss Bang Bang United</label>
              <fieldset>
                <input name="kkbb" type="number" id="kkbb" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Nazionale Cantanti</label>
              <fieldset>
                <input name="nazi" type="number" id="nazi" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Squadra Antimafia</label>
              <fieldset>
                <input name="sqaf" type="number" id="sqaf" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Team Barazzo</label>
              <fieldset>
                <input name="tmbz" type="number" id="tmbz" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Vasco da Gaba</label>
              <fieldset>
                <input name="vdg" type="number" id="vdg" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <label style="color: white">Werder Dema</label>
              <fieldset>
                <input name="wdd" type="number" id="wdd" placeholder="Inserisci Valore..." required="" class="contact-field" step="0.5">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="submit" name="submit" class="main-button">Accedi</button>
              </fieldset>
            </div>
          </div>
        </form>
    </div>
</div>
<?php include "common/footer.php"; ?>
