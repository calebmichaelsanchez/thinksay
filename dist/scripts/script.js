$(document).ready(function(){var carouselInit=function(){$(".carousel").carousel({interval:0})};carouselInit();var carousel2Init=function(){$(".carousel").carousel({interval:0})};carousel2Init(),$(".navigation li:nth-of-type(2)").addClass("contact-link"),$(".contact-link").click(function(event){event.preventDefault(),$(".contact").fadeToggle()})});