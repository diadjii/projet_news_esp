<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
    <div id="article-title"></div>
    <p id="article-content"></p>
    <small id="article-date"></small>
    <div id="comments">

    </div>
    <br>
    <br>
    <form id="form-create-comment">
        <label>Pseudo</label>
        <input type="text" name="pseudo"><br>
        <input type="text" id="article_id" name="article_id" hidden="true" value="">
        <label>Commentaire</label><br>
        <textarea rows="10" cols="50" name="comment"></textarea>
        <button type="submit">Envoyer</button>
    </form>
<script type="text/javascript" src="js/detail-article.js"></script>
</body>
</html>
