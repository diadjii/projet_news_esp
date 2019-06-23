<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
 <?php require "top_bar.php";?>
 <div class="admin-content">
        <h2>Création d'Article</h2>
        <div>
            <form id="form-create-article">
                <div>
                    <label>Titre</label>
                    <input type="text" name="title" placeholder="Titre de l'Article" required="true">
                </div>
                <div>
                    <label>Cat&eacute;gorie</label>
                    <select name="category-id" id="list-categories">
                        <option selected="true">Sélectionner une categorie</option>
                    </select>
                </div>
                <div>
                    <label>Contenu</label>
                    <textarea width=50 height="20" name="content"></textarea>
                </div>
                <button type="submit">Créer</button>
            </form>
        </div>
 </div>
 <script type="text/javascript" src="js/admin.js"></script>
</body>
</html>
