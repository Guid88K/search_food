$(window).scroll(function(event) {
    if($(this).scrollTop() > 40) {
        $(".scroll-mnu").slideDown();
        return false;
    }
    else {
        $(".scroll-mnu").slideUp();
    }
});