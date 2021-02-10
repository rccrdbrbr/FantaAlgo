<?php include "common/header.php"; ?>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="contact-form">
        <div class="col-md-12 col-sm-12">
          <h3 style="color: white"><strong>Registrati</strong></h3>
          <br>
        </div>
        <form id="contact" action="backend/signup.inc.php" method="post">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="name" type="text" id="name" placeholder="Nome" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="surname" type="text" id="surname" placeholder="Cognome" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="sqname" type="text" id="sqname" placeholder="Nome della squadra" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="username" type="text" id="username" placeholder="Username" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="pwd1" type="password" id="pwd1" placeholder="Password" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="pwd2" type="password" id="pwd2" placeholder="Ripeti la password" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="submit" name="submit" class="main-button">Registrati</button>
              </fieldset>
            </div>
          </div>
        </form>
    </div>
</div>
<?php include "common/footer.php"; ?>
