/*global $,console*/

$(function () {
   
    'use strict';
    
    var myInterval,
        
        width = 0;
    
    myInterval = setInterval(function () {
                    
        width = width + 1;
            
        $('.full').css('width', width * 6);
        
        $('.pourcentage').html(width + '%');
        
        if (width * 6 === 600) {
            clearInterval(myInterval);
            $('h3').slideDown();
            $('a').slideDown();
        }   
    }, 20);
    
    
    
});