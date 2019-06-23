$(() => {
    url = window.location.search.substring(1);

    getDetailsArticle(url);
})



function getDetailsArticle(slug){
    $.getJSON("article/detail?"+slug).done(response => {
        console.log(response);
        $("#article-title").text(response.title);
        $("#article-content").text(response.content)
        $("#article-date").text(response.created_at);
    }).fail(error => {
        console.log(error);
    })
}
