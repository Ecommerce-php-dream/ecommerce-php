<!-- Page Content -->
<div class="container-fluid">
  <div class="row">
    <div id="carousel-frontPage" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-frontPage" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-frontPage" data-slide-to="1"></li>
        <li data-target="#carousel-frontPage" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-responsive" src="resources/img/slider1.jpg" alt="...">
        </div>
        <div class="item">
          <img class="img-responsive" src="resources/img/slider2.jpg" alt="...">
        </div>
        <div class="item">
          <img class="img-responsive" src="resources/img/slider4.jpg" alt="...">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row selection-frontPage">
    <div class="col-lg-12 col-lg-push-2">
      <form class="" action="?page=20" method="post">
        <div class="col-lg-2">
          <dl class="dropdown">
            <dt>
              <a class="text-center" href="#">
                <span class="hida">Marque</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </dt>
            <dd>
              <div class="mutliSelect">
                <ul>
                  <?php foreach (getProductName() as $product): ?>
                    <li>
                    <input type="checkbox" name="mark[]" value="<?php echo $product->name; ?>" /><?php echo $product->name; ?></li>
                  <?php endforeach; ?>
                  </li>
                </ul>
              </div>
            </dd>
          </dl>
        </div>
        <div class="col-lg-2">
          <dl class="dropdown">
            <dt>
              <a class="text-center" href="#">
                <span class="hida">Année</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </dt>
            <dd>
              <div class="mutliSelect">
                <ul>
                  <?php foreach (getProductYear() as $product): ?>
                    <li>
                    <input type="checkbox" name="year[]" value="<?php echo $product->year; ?>" /><?php echo $product->year; ?></li>
                  <?php endforeach; ?>
                  </li>
                </ul>
              </div>
            </dd>
          </dl>
        </div>
        <div class="col-lg-2">
          <dl class="dropdown">
            <dt>
              <a class="text-center" href="#">
                <span class="hida">Prix</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </dt>
            <dd>
              <div class="mutliSelect">
                <ul>
                  <?php foreach (getProductPrice() as $product): ?>
                    <li>
                    <input type="checkbox" name="price[]" value="<?php echo number_format($product->price,2,' ',','); ?>" /><?php echo number_format($product->price,2,',',' ').'€'; ?></li>
                  <?php endforeach; ?>
                  </li>
                </ul>
              </div>
            </dd>
          </dl>
        </div>
        <div class="col-lg-2">
          <dl class="dropdown">
            <dt>
              <a class="text-center" href="#">
                <span class="hida">Catégories</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
            </dt>
            <dd>
              <div class="mutliSelect">
                <ul>
                  <?php foreach (getCategory() as $category): ?>
                    <li>
                    <input type="checkbox" name="category[]" value="<?php echo $category->name; ?>" /><?php echo $category->name; ?></li>
                  <?php endforeach; ?>
                  </li>
                </ul>
              </div>
            </dd>
          </dl>
        </div>
        <button class="btn" type="submit" name="button">Filtrer <i class="fa fa-search" aria-hidden="true"></i> </button>
      </form>
    </div>
  </div>
</div>

<?php

if(!empty($_POST)) {
  foreach ($_POST['mark'] as $value) {
  echo $value.'<br>';
}
  foreach ($_POST['year'] as $value) {
  echo $value.'<br>';
}
  foreach ($_POST['price'] as $value) {
  echo $value.'<br>';
}
  foreach ($_POST['category'] as $value) {
  echo $value.'<br>';
}

  $mark = $_POST['mark'];
  var_dump($_POST['mark']);
}


?>
