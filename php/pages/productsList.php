<!-- Page Content -->
<div class="container">

    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Retrouvez nos produits</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
      <?php foreach (getProduct() as $product): ?>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="<?php echo $product['image']; ?>" alt="">
            </a>
            <h3>
                <a href="#"><?php echo $product['name']; ?></a>
            </h3>
            <p><?php echo $product['description']; ?></p>
        </div>
      <?php endforeach; ?>

        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Product Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>

        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Product Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>

        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Product Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Product Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Nom du projet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Nom du projet</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">Project Name</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->
