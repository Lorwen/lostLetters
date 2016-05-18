<?php $title = 'Espace lecture'; ?>

<?php ob_start(); ?>
<div id="contenu">
  <?php echo '<h2>'.htmlspecialchars($result['title']).'</h2>'; ?>
  <?php echo nl2br($result['content']); ?><br/><br/>
  <!-- lien vers la page commentary.php -->
  <p><a href="commentary.php?id=<?php echo htmlentities($result['id'])?>">Pour commenter cliquer sur ce lien</a></p>
</div><!--#contenu -->
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
