<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
  <div id="contenu">

				<h2>Articles récents </h2>
					<!-- parcours des résultats -->
				<ul>
					<?php foreach($articles as $article) : ?>
						<li>
              <!-- Affiche le titre -->
							<h3><?php echo htmlentities($article['title']);?></h3>
              <!-- Affiche les résumés -->
              <div class="preview">
								<?php $preview = substr($article['content'],0,1000);?>
								<?php echo nl2br($preview); ?>
								<div class="link_article">
									<a href="c-display.php?id=<?php echo htmlentities($article['id'])?>">Lire la suite >></a>
								</div>
							</div>
						<?php	if(!empty($_SESSION['isConnected'])AND $_SESSION['isConnected']['0']['admin'] == 1) : ?>
							<!-- Affiche l'icone de modification -->
							<a href="c-modify.php?id=<?php echo htmlentities($article['id'])?>" title="Modification"><span class="glyphicon glyphicon-refresh" /span></a>
							<!-- Affiche l'icone de suppression -->
							<a href="delete.php?id=<?php echo htmlentities($article['id'])?>" title="Suppression"><span class="glyphicon glyphicon-trash" /span></a>
							<?php endif; ?>
						</li>
          <?php endforeach; ?>
				</ul>

    </div> <!--#contenu -->
<?php  $contenu = ob_get_clean(); ?>

<?php require('../views/template.php'); ?>
