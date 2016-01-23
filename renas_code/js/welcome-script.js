/* Javascript file for adding Parallax effects to welcome page */

$('#window1').parallax({imageSrc: 'img/mountains.jpg'});
$('#window3').parallax({imageSrc: 'img/mountains.jpg'});

/*For sticky header*/
$(document).ready(function() {
var stickyNavTop = $('.navbar').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.navbar').addClass('sticky');
     $('#window1').addClass('saveplace');
} else {
    $('.navbar').removeClass('sticky'); 
     $('#window1').removeClass('saveplace');
}

};
 
stickyNav();
 
$(window).scroll(function() {
    stickyNav();
});
});

/*for smooth mouse scroll 
$(function(){   

        var $window = $(window);
    var scrollTime = 0.5;
    var scrollDistance = 170;

    $window.on("mousewheel DOMMouseScroll", function(event){

        event.preventDefault(); 

        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,
                overwrite: 5                            
            });

    });
});
*/