<?php $title = 'Inscription'; ?>

<?php ob_start(); ?>
  <div id="contenu">
    <form class="form-horizontal" method="post" action="">
      <div class="form-group">
        <label for="inputNickName" class="col-sm-2 control-label">Pseudonyme</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputNickName" name="pseudo" placeholder="Pseudonyme">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputVérification" class="col-sm-2 control-label">Vérification</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputVérification" name="vérification" placeholder="Vérification">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="bouton" class="btn btn-default" value="Valider">
        </div>
      </div>
    </form>
  </div>
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
