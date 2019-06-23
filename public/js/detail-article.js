$(() => {
    url = window.location.search.substring(1);

    getDetailsArticle(url, getAllComment);
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
        getAllComment($("#article_id").val(response.id));
    }).fail(error => {
        console.log(error)
    })
})

function getAllComment(articleId) {
    $.getJSON('/comment/all?id=' + articleId).done(response => {
        response.forEach(com => {
            var c = `<span>pseudo : ${com.pseudo}</span>
                    <p>commentaire : ${com.comment}</p><hr>`;

            $("#comments").append(c);
        })
    }).fail(error => {
        console.log(error)
    })
}
