<!DOCTYPE html>
<html>
<head>
	<!-- meta tag  -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../assets/css/bootstrap.min.css"rel="stylesheet">
	<link  href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/hover.min.css" rel="stylesheet" media="all">
	<link href="../assets/css/hover.css" rel="stylesheet" media="all">

	<title>Les lettres perdues</title>
</head>
<body>
	<header>
		<div class="page-header">
			<h1>Les lettres perdues <br/><small><?= $title ?></small></h1><!-- Ca équivaut à un echo de $title -->
		</div>
		<!-- Remplacer l'include nav.php par v-nav.php -->
		<?php include("v-nav.php");?>
	</header>
	<!-- affichage du message d'erreur -->
	<?php if(!empty($error)) : ?>
		<div class="error">
			<div class="alert alert-warning fade-in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong><?php echo $error; ?></strong>
			</div>
		</div>
	<?php endif; ?>
	<section class="row" >
		<article class="col-sm-8">
			<div id="contenu" >
				<?= $contenu ?> <!-- Element spécifique-->
			</div>
		</article>
		<aside class="col-sm-4">
			<?php if(!empty($_SESSION)) :?>
				<p class="nickname"> Vous êtes connecté sur le pseudo : </p>
				<h3 class="nickname"><?php echo $_SESSION['isConnected']['0']['username'];?></h3>
			<?php else :?>
				<p class="nickname"> Vous êtes connecté en tant que visiteur</p>
			<?php endif; ?>

		</aside>
	</section>
		<div class="clear" style="clear:both"></div>
		<?php include("../includes/footer.php"); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
	</body>
	</html>
