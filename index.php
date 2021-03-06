<?php
require_once 'include/init.php';
require_once 'include/header.php';
 ?>

<h1 class="texte-aligne display-4">Ajout employé</h1><hr>

<!-- formulaire -->
<div class="col-md-8 order-md-1">
  <h4 class="mb-3">Billing address</h4>
  <form class="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName">First name</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="username">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback" style="width: 100%;">
          Your username is required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="email">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>
  </form>
</div> <!-- fin du formulaire -->

<?php
require_once 'include/footer.php';
 ?>
