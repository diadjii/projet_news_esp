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
    <link href="css/blog-post.css" rel="stylesheet">

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

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4" id="article-title"></h1>

            <!-- Author -->
            <p class="lead">
                par
                <a href="#">Admin</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><img src="icons/comment.svg" width="20px" height="20px"> Posté le <small id="article-date"></small></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead" id="article-content"></p>

            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Laisser un commentaire</h5>
                <div class="card-body">
                    <form id="form-create-comment">
                        <div class="form-group">
                            <input type="text" hidden id="article_id" name="article_id" value="">
                            <input class="form-control" type="text" name="pseudo" placeholder="Tapez votre pseudo...">
                            <br>
                            <textarea class="form-control" rows="3" required name="comment" placeholder="Tapez votre commentaire..."></textarea>
                        </div>
                        <input type="submit" value="Commenter" class="btn btn-primary">
                    </form>
                </div>
            </div>

            <!-- Single Comment -->
            <div id="comments"></div>

            <!-- Comment with nested comments -->
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
<script type="text/javascript" src="js/detail-article.js"></script>
</body>

</html>
