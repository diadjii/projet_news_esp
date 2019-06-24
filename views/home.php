<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title>ESP News</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" style="max-width:30px;" class="rounded-circle"> ESP News
        </a>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Articles et Infos
                <small>à chaud</small>
            </h1>

            <div id="article"></div>


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Plus anciens</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Plus récents &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Recherche</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher...">
                        <span class="input-group-btn">
                <button class="btn btn-success" type="button">OK</button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Catégories</h5>
                <div class="card-body">
                    <div class="row" id="categorie">

                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Widget</h5>
                <div class="card-body">
                    Ne ratez plus rien sur les informations de l'école. Suivez nous à temps réel pour vous actualiser. <br><br>
                    <b style="padding: 3px" class="badge-success">#ESP News</b>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">

        <p class="m-0 text-center text-white">
            <img src="img/logo.jpg" style="max-width:70px;" class="rounded-circle">
            Copyright &copy; ESP News 2019
        </p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/home.js"></script>
</body>

</html>
