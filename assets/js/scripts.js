$(document).ready(function(){

// add current class to navigation
$(".post-link").click(function(){
    var post_link = $(this).attr("href");
    if ( $( this ).hasClass( "logo" ) ) {
        $(".post-link").removeClass("current");
        $(".home").addClass("current",{duration:500});
    } else {
        $(".post-link").removeClass("current");
        $(this).addClass("current");
    }    
});

// Toggle Menu
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(this).toggleClass("expanded");

        if( $(this).hasClass("expanded") ) {
          $(this).html('<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>');            
        } else {
            $(this).html('<i class="fa fa-bars" aria-hidden="true"></i>'); 
        }
    });

});