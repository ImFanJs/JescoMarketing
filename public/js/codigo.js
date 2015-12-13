
	$(document).ready(function(){

        $(".cerrar").click(function(){
        
            $(".cookies").fadeOut('slow');
        
        });

        $('#boton').click(function(){

    	   $('.menu').toggle('slow');

        });

        $('.menu').mouseleave(function(){

    	   $('.menu').hide('slow');

        });

    });