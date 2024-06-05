<?php
require_once './templates/head.inc.php';
?>

   <main class="uk-container uk-padding uk-flex uk-flex-middle uk-flex-center">
      <form method="POST" action="src/formhandlers/login.php" class="uk-width-1-1 uk-flex uk-flex-center">
         <div class="uk-card uk-card-default uk-width-3-5 uk-padding-small">
            <div class="uk-card-header">
               <h2 class="uk-text-uppercase">Inloggen</h2>
            </div>
<!--            <div class="uk-alert-danger" uk-alert>-->
<!--               <a href class="uk-alert-close" uk-close></a>-->
<!--               <p>Hier komt een algemene melding wanneer er iets fout gegaan is tijdens het inloggen</p>-->
<!--            </div>-->
            <div class="uk-card-body uk-flex uk-flex-between uk-card-body-gap">
               <div class="uk-width-1-3">
                  <img src="img/logo4.png" class="uk-card-media uk-card-body-login-logo" alt="Webshop Het Witte Kippetje" title="Webshop Het Witte Kippetje" />
                  <div class="uk-flex uk-flex-column uk-flex-middle">
                     <p class="uk-text-center uk-margin-remove-bottom uk-text-muted">Webshop</p>
                     <h4 class="uk-text-uppercase uk-text-center uk-margin-remove-vertical uk-text-muted">Het Witte Kippetje</h4>
                  </div>
               </div>
               <div class="uk-width-2-3 uk-flex uk-flex-column">
                  <div class="uk-padding">
                     <label for="email" class="uk-form-label">Email<span class="uk-text-xsmall uk-text-italic uk-text-primary"> (Verplicht)</span></label>
                     <input type="email" name="email" class="uk-input" id="email" placeholder="E-mail adres..." />
<!--                     <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
                  <div class="uk-padding">
                     <label for="password" class="uk-form-label">Wachtwoord<span class="uk-text-xsmall uk-text-italic uk-text-primary"> (Verplicht)</span></label>
                     <input type="password" name="password" class="uk-input" id="password" placeholder="Wachtwoord..." />
<!--                     <p class="uk-text-danger uk-text-xsmall uk-text-italic uk-margin-remove-vertical">Bericht als dit veld niet ingevuld is</p>-->
                  </div>
               </div>
            </div>
            <div class="uk-card-footer uk-flex uk-flex-between">
               <a href="#" class="">Wachtwoord vergeten?</a>
               <button class="uk-button uk-button-primary" type="submit">Inloggen</button>
            </div>
         </div>
      </form>
   </main>


<?php
require_once './templates/foot.inc.php';
