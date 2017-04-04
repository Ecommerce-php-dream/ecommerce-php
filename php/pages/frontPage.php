<?php

  include_once 'php/common/header.php';

  $faker = Faker\Factory::create();

  $query = $bdd->query("SELECT * FROM product");
  $product = $query->fetchAll();

?>
<!-- Page Content -->
<div class="container">
    <div class="jumbotron">
        <div class="row">

            <img class="col-lg-6" src="https://www.industrie-techno.com/mediatheque/9/6/3/000011369_imageArticlePrincipaleLarge.jpg" alt="">
            <h2 class="col-lg-6">Presentation vehicule professionel</h2>

        </div>
    </div>

    <div class="row">
        <div class="col-md-3 ">
            <p class="lead">Categories de voiture</p>
            <div class="list-group ">
                <a href="?page=28" class="list-group-item ">Ancienne voiture</a>
                <a href="?page=27" class="list-group-item">Americaine</a>
                <a href="?page=26" class="list-group-item">Sportive</a>
                <a href="?page=25" class="list-group-item">Why ?</a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row carousel-holder">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="<?php echo $faker->imageUrl ; ?>" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="<?php echo $faker->imageUrl ; ?>" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="<?php echo $faker->imageUrl ; ?>" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
              <?php  foreach ($product as $prod) {  ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                          <img src="<?php echo $prod['image'] ; ?>" alt="">
                          <div class="caption">
                              <h4 class="pull-right">$<?php echo $prod['price'] ;?></h4>
                              <h4><a href="?page=21&id=<?php echo $prod['id']; ?>"></a></h4>

                              <p><?php echo $prod['description'] ; ?></p>

                          </div>

                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>

                    </div>
                </div>
                <?php } ?>



                <div class="col-sm-4 col-lg-4 col-md-4">
                    <h4><a href="#">Like this template?</a>
                    </h4>
                    <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                    <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                </div>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->
