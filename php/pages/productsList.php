<?php

// On récupére le numéro de la page depuis l'url
// Si le paramètre "pageNum" n'existe pas, on définit que la page vaut 1
$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;

// On définit les nombre d'articles par page
$nbreArticleParPage = 6;

// On recale le numéro de la page courante
// Si le visiteur voit la page 1, le programme doit voir la page 0
$pageNumero = $pageNum-1;

// On définit la ligne de départ du nombre de résultats que MySQL doit retourné
$start = $pageNumero * $nbreArticleParPage;

// On effectue la requête de comptage du nombre total d'article dans la BDD
$countQuery = $bdd->query("SELECT COUNT(*) FROM product");
$countArticles = $countQuery->fetchColumn();

// On calcule le nombre de pages total ($countArticles / $nbreArticleParPage)
// On utilise la fonction "ceil" pour obtenir l'entier supérieur, au cas ou la
// division retourne un décimal
$nbrePages = ceil($countArticles / $nbreArticleParPage);

// On définit le numéro de la page précédente
$pagePrev = $pageNum-1;

// On définit le numéro de la page suivante
$pageNext = $pageNum+1;


// Si l'utilisateur force l'affiche d'une page dont le numéro est inférieur
// à 1, on le redirige vers la permiere page
if ($pageNum < 1) {
    header("location: ?page=20&pageNum=1");
    exit;
}

// Si l'utilisateur force l'affiche d'une page dont le numéro est supérieur
// au nombre de page total, on le redirige vers la derniere page
if ($pageNum > $nbrePages) {
    header("location: ?page=20&pageNum=".$nbrePages);
    exit;
}

  // Requete de sélection des articles concerneés par la page courante
  // La requete retourne les articles 10 a 15 si le numero de la page est 3
  $query = $bdd->query("SELECT id, name, description, image FROM product LIMIT $start,$nbreArticleParPage");
  $results = $query->fetchAll(PDO::FETCH_OBJ);

?>

<!-- Page Content -->
<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Titre de tous les articles
                <small><br />Liste des articles</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
      <?php foreach ($results as  $value): ?>
        <div class="col-md-4 portfolio-item">
            <a href="?page=21&produit=<?php echo $value->id; ?>">
                <img class="img-responsive" src="<?php echo $value->image; ?>" alt="">
            </a>
            <h3>
                <a href="?page=21&produit=<?php echo $value->id; ?>"><?php echo $value->name; ?></a>
            </h3>
            <p><?php echo $value->description; ?></p>
        </div>
      <?php endforeach; ?>


    <hr>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
          <hr>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <?php if ($pagePrev >= 1): ?>
                <li>
                  <a href="?page=20&pageNum=1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;&laquo;</span>
                  </a>
                </li>
                <li>
                  <?php echo "<a href=\"?page=20&pageNum=".$pagePrev."\" aria-label=\"Previous\">"; ?> <!-- <a href="?page=20&pageNum="<?php $pagePrev ?> aria-label="Previous"> -->
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              <?php endif; ?>

              <?php
              for ($i=1; $i<=$nbrePages; $i++) {

                  if ($pageNum == $i) {
                      // Affichage de la page courante
                      echo "<li class=\"active\"><a href=\"?page=20&pageNum=".$i."\">$i</a></li>";
                  } else {
                      // Affichage des autres pages
                      echo "<li><a href=\"?page=20&pageNum=".$i."\">$i</a></li>";
                  }
              }
              ?>

              <?php if ($pageNext <= $nbrePages): ?>
                <li>
                  <?php echo "<a href=\"?page=20&pageNum=".$pageNext."\" aria-label=\"Next\">"; ?><!-- <a href="?page=20&pageNum="<?php $pageNext ?> aria-label="Next"> -->
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
                <li>
                  <?php echo "<a href=\"?page=20&pageNum=".$nbrePages."\" aria-label=\"Next\">"; ?><!-- <a href="?page=20&pageNum="<?php $nbrePages ?> aria-label="Next"> -->
                    <span aria-hidden="true">&raquo;&raquo;</span>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </nav>
          <br>
        </div>
    </div>
    <!-- /.row -->
