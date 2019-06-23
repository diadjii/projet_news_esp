
$(() => {
    getAllArticles();
})


function getAllArticles(){
    $.getJSON('/article/all').done(response => {
        console.log(response);
        response.forEach( article =>  {
            // statements
        var article = `<a class="article" onclick="readArticle('${article.slug}')">
                <h2 class="article-title">${article.title}</h2>
                <p class="article-content">${article.content}</p>
                <div class="article-bottom">
                    <img src="icons/comment.svg" width="20px" height="20px">
                    <small class="article-date">${article.created_at}</small>
                </div>
            </a>`;

            $("#article").append(article);
        });
    }).fail((error,t) => {
        console.log(error)
        console.log(t)
    })
}

function readArticle(slug){
    window.location.href="articles?title="+slug;
}
