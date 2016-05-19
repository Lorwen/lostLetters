<?php $title = 'Espace lecture'; ?>

<?php ob_start(); ?>
<div id="contenu">
  <?php echo '<h2>'.htmlspecialchars($results['title']).'</h2>'; ?>
  <?php echo nl2br($results['content']); ?><br/><br/>
  <!-- lien vers la page commentary.php -->
  <p><a href="c-commentary.php?id=<?php echo htmlentities($results['id'])?>">Pour commenter cliquer sur ce lien</a></p>
  <!--Si $countage est > à 0 alors afficher les commentaires -->
  <?php if(!empty($countage<=0))
  {
    echo"Soit le premier à donner ton avis.";
  }
  else
  {
    $comments  = $commentaries->fetchAll(PDO::FETCH_ASSOC);
  } ?>
</div><!--#contenu -->
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
