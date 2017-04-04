<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Page d'accueil Ecommerce</title>
      <link href="resources/css/bootstrap.min.css" rel="stylesheet">
      <link href="resources/css/shop-homepage.css" rel="stylesheet">
      <link rel="stylesheet" href="resources/css/main.css">
      <link rel="stylesheet" href="resources/css/font-awesome.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=0">E-commerce</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                  <?php if (isLogged()): ?>
                  <li class="white_wrote btn_nav_pad">Bonjour <?php echo $_SESSION['user']['login'];?> </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="?page=1">Mon compte</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="?page=3">Déconnexion</a></li>
                      </ul>
                    </li>
                  <?php else: ?>
                   <li><a href="?page=11">Connexion</a></li>

                   <li>
                       <a href="?page=10">Inscription</a>
                   </li>
                   <li>
                       <a href="#">Contact</a>
                   </li>
                <?php endif; ?>s
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
