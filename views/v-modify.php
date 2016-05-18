<?php $title = 'Article'; ?>

<?php ob_start(); ?>
<div id="contenu">
  <form method="post" action="">
    <fieldset>
      <legend>Modification de l'article</legend>
      <p>	 <label for="title">Titre de l'article : </label>
        <input type="text" name="title" id="title" required="required" value="<?php echo $selectedArticle['title']?>"/>
        <p>
          <label for="text_article">Article</label>
          <br />
          <textarea name="text_article" id="text_article" rows="25" cols="125" required="required" ><?php echo $selectedArticle['content']; ?></textarea>
        </p>
      </p>
    </fieldset>
    </br>
    <input type="submit" name ="bouton" value="Valider">
  </form>
</div>
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
