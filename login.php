<?php include "common/header.php"; ?>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="contact-form">
        <div class="col-md-12 col-sm-12">
          <h3 style="color: white"><strong>Accedi</strong></h3>
          <br>
        </div>
        <form id="contact" action="backend/login.inc.php" method="post">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="username" type="text" id="username" placeholder="Username" required="" class="contact-field">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="pwd" type="password" id="pwd" placeholder="Password" required="" class="contact-field">
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
