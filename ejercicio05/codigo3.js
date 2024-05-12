$(document).ready(function(){
    $('#paisForm').submit(function(e){
        e.preventDefault();
        var nombrePais = $('#nombrePais').val();
        $.ajax({
            type: 'GET',
            url: 'pais.php',
            data: {nombre_pais: nombrePais},
            success: function(data){
                var pais = JSON.parse(data);
                swal({
                    title: pais.nombre,
                    text: "Población: " + pais.poblacion + "\nExtensión territorial: " + pais.extension,
                    icon: "success",
                });
            },
            error: function(xhr, status, error) {
                swal({
                    title: "Error",
                    text: "No se encontró el país.",
                    icon: "error",
                });
            }
        });
    });
});
