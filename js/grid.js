jQuery.noConflict();

jQuery(document).ready(function($) {
    $("li.thumb").click(function() {
       var index = $(this).index();
 
       $(".selected").removeClass("selected");
       $("section").eq(index).addClass("selected");
    });
});