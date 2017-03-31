<!-- Page Content -->
<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$database = "e_com";

try {
  $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$pass);

} catch (Exception $e) {
  var_dump($e);
  die('Erreur :' . $e->getMessage());
}


  $query   = $bdd->query('SELECT * FROM product');
  $product = $query->fetch();

  //var_dump($product);
  echo "tableau rempli";
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead"><strong>Poiss'shop</strong></p>
            <div class="list-group">
                <a href="#" class="list-group-item active">Ajouter un article</a>
                <a href="#" class="list-group-item">Modifier un article</a>
                <a href="#" class="list-group-item">Supprimer un article</a>
            </div>
        </div>
            <div class="col-md-9">
                <div class="thumbnail">
                  <?php foreach( $product as $key => $value): ?>

                    <img class="img-responsive" src="<?php echo $product->image ; ?>" alt="">
                    <div class="caption-full">

                        <h4 class="pull-right">$<?php echo $product->price ; ?></h4>
                        <h4><a href="#"><?php echo $product->name ; ?></a></h4>

                        <p><?php echo $product->description ; ?></p>
                    </div>

                  <?php endforeach; ?>

                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">
                    <div class="text-right">
                        <a class="btn btn-success">Laisser un commentaire</a>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">15 days ago</span>
                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
