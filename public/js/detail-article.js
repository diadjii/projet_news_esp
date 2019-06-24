$(() => {
    url = window.location.search.substring(1);

    getDetailsArticle(url, getAllComment);
    getCategory();
})


function getDetailsArticle(slug, success) {
    $.getJSON("article/detail?" + slug).done(response => {
        console.log(response);
        $("#article_id").val(response.id);
        $("#article-title").text(response.title);
        $("#article-content").text(response.content)
        $("#article-date").text(response.created_at);
        success(response.id);
    }).fail(error => {
        console.log(error);
    })
}


$("#form-create-comment").submit(e => {
    e.preventDefault();

    $.post("/comment/create", $("#form-create-comment").serialize()).done(response => {
        getAllComment($("#article_id").val());
    }).fail(error => {
        console.log(error)
    })
})

function getAllComment(articleId) {
    $.getJSON('/comment/all?id=' + articleId).done(response => {
        console.log(response)
        response.forEach(com => {
            var c = `
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="img/noImage.jpg" style="max-width: 40px">
                        <div class="media-body">
                            <h6 class="mt-0">${com.pseudo}</h6>
                            ${com.comment}
                        </div>
                    </div>
                    `;

            $("#comments").append(c);
        })
    }).fail(error => {
        console.log(error)
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
