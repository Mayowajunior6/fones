
window.$ = require('jquery');

require('bootstrap');

$(document).ready(function(){
    console.log('jQuery was loaded successfully!');
    $('.menu-ham').click(function () {
        $('.mobile_menu').animate({right: '0px'}, 100)
      });
      $('.close-menu').click(function(){
        $('.mobile_menu').animate({right:'-200px'}, 100)
      });
    });
