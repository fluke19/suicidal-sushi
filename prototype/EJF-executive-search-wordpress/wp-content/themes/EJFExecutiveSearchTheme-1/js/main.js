$(document).ready(function(){$("body").scrollspy({offset:20}),$(function(){$(".navbar a, #header a").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);if(a=a.length?a:$("[name="+this.hash.slice(1)+"]"),a.length)return $("html,body").animate({scrollTop:a.offset().top},1e3),!1}})}),$(window).scroll(function(){$(document).scrollTop()>50?$("nav.home").addClass("shrink"):$("nav.home").removeClass("shrink")}),$(".carousel").carousel({interval:!1})});