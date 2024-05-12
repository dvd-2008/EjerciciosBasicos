$(document).ready(function(){
    $('#potenciaForm').submit(function(e){
        e.preventDefault();
        var base = $('#base').val();
        var potencia = $('#potencia').val();
        $.ajax({
            type: 'POST',
            url: 'potencia.php',
            data: {base: base, potencia: potencia},
            success: function(data){
                $('#resultado').html('<p class="texto-resultado">El resultado es:</p><p class="resultado-numero">' + data + '</p>');
            }
        });
    });
});
