<?php
  include_once 'php/common/header.php';
  //$faker = Faker \ Factory
?>
<div class="container">
  <div class="row">
    <h1>Pourquoi laisser les gens dans la MISERE quand on sort de si belle voiture ? </h1>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail">
        <h2>Afrique</h2>
        <img src="http://www.cameroun24.net/images/news/Voiture_surcharge640.jpg" alt="">
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail">
        <h2>Creativité</h2>
        <img src="http://lolaction.free.fr/pics/large/une-petite-voiture-sans-permis-rentre-dans-le-coffre-d-une-renault-kangoo.jpg" alt="">

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail">
        <h2>Innovation</h2>
        <img src="http://www.afrizap.com/wp-content/uploads/2015/09/Turtle.jpg" alt="">

      </div>
    </div>
  </div>
  <br/>
  <div class="row">
    <div class="col-lg-12">
      <button type="button" class="btn btn-warning" name="button">Leave a comment ?</button>
    </div>

    <div class="col-lg-7">
      <form class="" action="why.php" method="post">
        <div class="form-group">
          <label for="login">Pseudo :</label>
          <input type="text" id="login" name="login" class="form-control col-lg-12" placeholder="Login">
        </div>
        <div class="form-group">
          <label for="comm">Commentaire :</label>
          <textarea name="comm" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-default" value="Envoyé vos comm'">
      </form>
    </div>

  </div>
</div>
