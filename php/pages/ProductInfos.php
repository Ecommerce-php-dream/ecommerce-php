<!-- Page Content -->
<?php

if (isset($_GET['produit']) && !empty($_GET['produit']) ){

    $id_user = $_GET['produit'];
    //getProds($id_user);

    $query = $bdd->prepare("SELECT * FROM product  WHERE id=:idUser");
    $query->bindValue(":idUser", $id_user, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();

}else{

    echo "il y a un soucis";
}
$faker = Faker\Factory::create();

    //var_dump($_POST);

    $numberArticle = null;

    if( isset($_POST ) )
    {
        $numberArticle =  $_POST['numberArticle'];

        $price = $result->price * $numberArticle ;

    }
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

                    <img class="img-responsive" src="<?php echo $result->image; ?>" alt="">
                    <div class="caption-full">

                        <h4 class="pull-right">$ <?php echo $result->price ; ?></h4>
                        <h4><strong><?php echo $result->name ?></strong></h4>

                        <p><?php echo $result->description ; ?></p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p>Quantité diponible :<?php echo $result->quantity ;?></p>
                                <div class="form">
                                <p>combien d'articles souhaitez vous ?</p>
                                <form action="" method="POST">
                                        <select name="numberArticle" id="numbArt">
                                        <?php for($i = 1; $i <= $result->quantity; $i++){ ?>

                                        <option value="<?php echo $i ; ?>"><?php echo $i ; ?></option>
                                        <?php } ?>
                                        </select>
                                        <input type="submit" value="Valider" class="btn btn-warning">
                                </form>

                                <?php if ( $result->quantity > 1) {
                                    echo "<p class='text-success'>Le prix de votre commande s'eleve a ".$price." €</p>";
                                    } else {

                                    echo "<p class='text-error'>Désolé nous avon plus d'article disponible</p>";
                                    } ?>

                            </div>
                        </div>
                    </div>

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
