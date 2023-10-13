<form action="<?php echo $page->url()?>" method="post" class="u-columns u-margin_reset">

  <div class="u-6col">
    <label for="contactform-name"><span><?php echo $page->label_name() ?></span></label>
    <input name="name" class="is-required" type="text" id="contactform-name" required autofocus>
    <label class="is-error js-error--name" style="display: none;" for="contactform-name"><?php echo $page->error_name() ?></label>
  </div>

  <div class="u-6col">
    <label for="contactform-email"><span><?php echo $page->label_email() ?></span></label>
    <input name="email" class="is-required" type="email" id="contactform-email" inputmode="email" required>
    <label class="is-error js-error--email" style="display: none;" for="contactform-email"><?php echo $page->error_email() ?></label>
    <label class="is-error js-error--email_invalid" style="display: none;" for="contactform-email"><?php echo $page->error_email_invalid() ?></label>
  </div>

  <div class="u-12col">
    <label for="contactform-text"><span><?php echo $page->label_text() ?></span></label>
    <textarea name="text" class="is-required" id="contactform-text" required></textarea>
    <label class="is-error js-error--text" style="display: none;" for="contactform-text"><?php echo $page->error_text() ?></label>
  </div>

  <label class="uniform__potty" for="website" style="display: none;">Please leave this field blank</label>
  <input type="text" name="website" id="website" class="uniform__potty" style="display: none;">

  <div class="u-12col">
    <button name="_submit" class="btn--small" type="submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>><?php echo $page->submit() ?></button>
  </div>

</form>
