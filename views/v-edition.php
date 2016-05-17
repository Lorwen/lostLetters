<?php $title = 'Edition'; ?>

<?php ob_start(); ?>
  <div id="contenu">
    <form method="post" action="">
      <fieldset>
        <legend>Edition d'article</legend>
          <p>	<label for="title">Titre de l'article : </label>
    			     <input type="text" name="title" id="title" required="required" />
    			  <p>
    			    <label for="text_article">Article</label>
    			     <br />
    			    <textarea name="text_article" id="text_article" rows="20" cols="125" required="required"></textarea>
    			  </p>
    			</p>
    			    <input type="submit" class="btn btn-primary" name="bouton" value="Valider">
      </fieldset>
    <br/>
    </form>
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
