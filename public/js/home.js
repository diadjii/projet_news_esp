
$(() => {
    getAllArticles();
    getCategory();
})


function getAllArticles(){
    $.getJSON('/article/all').done(response => {
        console.log(response);
        response.forEach( article =>  {
            // statements
        var article = `
                <div class="card mb-4">
                    <img class="card-img-top" src="img/class.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">${article.title}</h2>
                        <p class="card-text">${article.content.substring(0, 50)}...</p>
                        <a href="#" class="btn btn-primary" onclick="readArticle('${article.slug}')" style="margin-top: 7px">Plus &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        <img src="icons/comment.svg" width="20px" height="20px">
                        Posté le ${article.created_at}
                    </div>
                </div>
            `;

            $("#article").append(article);
        });
    }).fail((error,t) => {
        console.log(error)
        console.log(t)
    })
}

function getCategory(){
    $.getJSON("/category/all").done((response) => {
        console.log(response)
        response.forEach(categorie => {
            var categorie =`
                    <div class="col-lg-6" id="categorie">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">${categorie.name}</a></li>
                        </ul>
                    </div>
                `;
            $("#categorie").append(categorie);
        });
    }).fail((error,t) => {
        console.log(error);
        console.log(t);
    })
}
function readArticle(slug){
    window.location.href="articles?title="+slug;
}
