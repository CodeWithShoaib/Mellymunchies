
// wow start
new WOW().init();
// wow end
document.addEventListener("DOMContentLoaded", function() {
  var opensearchBox = document.getElementById("opensearchBox");
  var header_searchBox = document.querySelector(".header_searchBox");

  opensearchBox.addEventListener('click', function() {
    header_searchBox.style.height = "200px";
    console.log("open search box clicked");
  });

  var closesearchBox = document.getElementById("closesearchBox");
  closesearchBox.addEventListener('click', function() {
    header_searchBox.style.height = "0px";
  });
});

// document.addEventListener("DOMContentLoaded", function() {
//   var opensearchBox = document.getElementById("opensearchBox");
//   var closesearchBox = document.getElementById("closesearchBox");
//   var header_searchBox = document.getElementById("header_searchBox");

//   opensearchBox.click
//     header_searchBox.style.height = "200px";
//     console.log("ok click");
  

//   closesearchBox.addEventListener('click', function() {
//     header_searchBox.style.height = "0px";
//   });
// });
$(document).ready(function() {
"use strict";

// Active Current Page
var str=location.href.toLowerCase();
$(".nav-area-full a").each(function() {
if (str.indexOf(this.href.toLowerCase()) > -1) {
$(".active").removeClass("active");
$(this).parent().addClass("active");
}
});	
// Active Current Page end
    
////// main slider
 $(".home-slider").slick({
    dots: true,
    arrows: false,
    infinite: !0,
    speed: 1500,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: !0,
    responsive: [
    {
      breakpoint: 767,
      settings: {
    dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
    });

////// testimonial slider
$(".popular-slider").slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  speed: 1500,
  autoplay: true,
  autoplaySpeed: 2000,
  //fade: true,
  //cssEase: 'linear',    
    });  
////// testimonial slider end
////// testimonial slider
$(".shop-by_slider").slick({
  dots: false,
  arrows: true,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  speed: 1500,
  autoplay: true,
  autoplaySpeed: 2000,
  //fade: true,
  //cssEase: 'linear',    
    });  
////// testimonial slider end


$('.thumb-slider').slick({
centerMode: true,
centerPadding: '0px',
arrows: true,
slidesToShow: 3,
slidesToScroll: 1,
responsive: [
{
breakpoint: 768,
settings: {
arrows: false,
dots:false,
centerMode: true,
centerPadding: '10px',
slidesToShow: 3
}
},
{
breakpoint: 767,
settings: {
arrows: false,
dots:false,
centerMode: false,
centerPadding: '10px',
slidesToShow: 1
}
},
{
breakpoint: 480,
settings: {
arrows: false,
dots:false,
centerMode: true,
centerPadding: '10px',
slidesToShow: 1
}
}
]
});


////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});
////// tabs generic end

////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});
////// tabs custom end

////// Accordion 
$('.accordion .quest-title.active1').addClass('active');
$('#accordion-1').slideDown(300).addClass('open');
function close_accordion_section() {
jQuery('.accordion .quest-title').removeClass('active');
jQuery('.accordion .quest-content').slideUp(300).removeClass('open');
}
jQuery('.quest-title').click(function(e) {
// Grab current anchor value
var currentAttrValue = jQuery(this).attr('href');
if(jQuery(e.target).is('.active')) {
close_accordion_section();
}else {
close_accordion_section();
// Add active class to section title
jQuery(this).addClass('active');
// Open up the hidden content panel
jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
}
e.preventDefault();
});
////// Accordion end 
});
 // document ready end

 
////// footer year
$(function(){
"use strict";
var theYear = new Date().getFullYear();
$('#year').html(theYear);
});	


