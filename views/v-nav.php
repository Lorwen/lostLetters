
  <nav class="navbar navbar-dark navbar-fixed" style="background-color: #defaff">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand hvr-shutter-out-vertical" href="/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- Si on n'est pas connecter -->
          <?php if(empty($_SESSION['isConnected'])) :?>
          <ul class="nav navbar-nav">
            <!--barre de navigation du login -->
            <li class="active">
              <a href="#" onclick="showLoginForm(this)"class="hvr-shutter-out-vertical" >Login <span class="sr-only">(current)</span></a>
              <form id="signin" class="navbar-form navbar-right" role="form" method="post" action="">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="pseudo" type="text" class="form-control" name="pseudo" placeholder="Votre pseudo" required="required">
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="mdp" type="password" class="form-control" name="password" placeholder="Votre mot de passe" required="required">
                  </div>
                <input type="submit" class="btn btn-primary" name="bouton" value="Valider">
              </form>
            </li>
            <li class="active">
              <a href="/signin.html" onclick="showLoginForm(this)"class="hvr-shutter-out-vertical"> Registration <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        <?php elseif(!empty($_SESSION['isConnected']) AND $_SESSION['isConnected']['0']['admin'] == 0) : ?>
          <ul class="nav navbar-nav">
            <li class="active"><a href="/logout.html"class="hvr-shutter-out-vertical">Déconnexion <span class="sr-only">(current)</span></a></li>
          </ul>
        <?php else : ?>
        <ul class="nav navbar-nav">
          <li class="active"><a href="/edition.html" class="hvr-shutter-out-vertical">Edition <span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="/logout.html"class="hvr-shutter-out-vertical">Déconnexion <span class="sr-only">(current)</span></a></li>
        </ul>
          <?php endif; ?>
          <!-- Barre de recherche -->
          <?php include('v-research.php'); ?>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav>
  <script>
    function showLoginForm(link){
      //On cache le lien
      link.style.display ='none';
      //On affiche le formulaire
      document.getElementById('signin').style.display='block';
    }
  </script>
