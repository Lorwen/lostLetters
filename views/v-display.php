<?php $title = 'Espace lecture'; ?>

<?php ob_start(); ?>
<div id="contenu">
  <?php echo '<h2>'.htmlspecialchars($results['title']).'</h2>'; ?>
  <?php echo nl2br($results['content']); ?><br/><br/>
  <!-- lien vers la page commentary.php -->
  <?php if(!empty($_SESSION['isConnected'])) :?>
  <p><a href="/commentaries/<?php echo htmlentities($results['id'])?>">Pour commenter cliquer sur ce lien</a></p>
<?php else : ?>
  <p><strong>Il faut être connecté sur son compte pour pouvoir faire des commentaires.</strong></p>
<?php endif; ?>
  <!--Si $countage est > à 0 alors afficher les commentaires -->
  <?php if(!empty($countage<=0)) :?>
    <?php echo"Soit le premier à donner ton avis."; ?>
  <?php else : ?>
    <?php $comments  = $commentaries->fetchAll(PDO::FETCH_ASSOC); ?>
    <h3>Commentaires</h3>
      <!-- Sert a parcourir un tableau dans un tableau -->
      <?php foreach ($comments as $key => $comments) : ?>
        <div class="comment">
          <div class="cadre">
            <p class="writing"><?php echo '<strong>'.htmlspecialchars($comments['author']).'</strong> le '.nl2br($comments['date']); ?><br/>
          </div>
          <!-- Doit apparaitre dans un cadre fait avec les div -->
          <?php echo nl2br(htmlspecialchars($comments['content'])); ?></p>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
</div><!--#contenu -->
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
