<?php $title = 'Espace communication'; ?>

<?php ob_start(); ?>
<div id="contenu">
  <!-- affichage du message d'erreur -->
  <?php if(!empty($error)) : ?>
    <div class="error">
      <div class="alert alert-warning fade-in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $error; ?></strong>
      </div>
    </div>
  <?php endif; ?>
  <form method="post" action="">
    <fieldset>
      <legend>Interaction</legend>

          <label for="text_comment">Commentaire</label>
          <br />
          <textarea name="text_comment" id="text_comment" rows="5" cols="125" ></textarea>
        </p>
      </p>
    </fieldset>
  </br>
  <input type="submit" class="btn btn-primary" name="bouton" value="Valider">
</form>
</div><!--#contenu -->
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
