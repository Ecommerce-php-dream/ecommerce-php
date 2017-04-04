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
    <div class="col-lg-12 col-lg-push-3">
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
                    <input type="checkbox" value="<?php echo $product->name; ?>" /><?php echo $product->name; ?></li>
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
                    <input type="checkbox" value="<?php echo $product->year; ?>" /><?php echo $product->year; ?></li>
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
                    <input type="checkbox" value="<?php echo $product->price; ?>" /><?php echo $product->price.'€'; ?></li>
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
