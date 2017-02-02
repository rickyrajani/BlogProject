function showPage(page) {
    var str = page + ".html";
    window.location.href = str;
}

function showBlog(article) {
    var str = "pages/blogarticles/" + article + ".html";
    window.location.href = str;
}

function showNext(article) {
    var str = article + ".html";
    window.location.href = str;
}

function showContent(id) {
    $('.sub-content').fadeOut('slow');

    setTimeout(function(){
        $(id).fadeIn('slow');
    }, 500);
}

function hideContent(id) {
    $(id).fadeOut('slow');
}