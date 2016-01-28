/* Javascript file for adding Parallax effects to welcome page */

$('#window1').parallax({imageSrc: 'images/steampunk-city.jpg'});
$('#window3').parallax({imageSrc: 'images/city.jpg'});

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
