$(document).ready(function(){
   
    $('#numero').focus(function(){
        $(this).closest('form').addClass('form-shadow');
    });

 
    $('#numero').blur(function(){
        $(this).closest('form').removeClass('form-shadow');
    });

   // agrandar boton
    $('.btn').hover(function(){
        $(this).addClass('btn-grow');
    }, function(){
        $(this).removeClass('btn-grow');
    });

 
    $('#tablaResult').addClass('animated slideInLeft');
});
