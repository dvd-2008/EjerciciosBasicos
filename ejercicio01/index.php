<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12+Charted&display=swap" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4 jacquard-12-charted-regular">Generador de Tablas de Multiplicar</h2>
            <form id="tablaForm">
                <div class="form-group">
                    <label for="numero">Ingresa un número para generar su tabla de multiplicar:</label>
                    <input type="number" class="form-control" id="numero" name="numero" min="1" required>
                </div>
                <button type="submit" class="btn btn-primary">Generar Tabla</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8" id="tablaResult"></div>
    </div>
</div>

<script src="codigo.js"></script>
<script>
    $(document).ready(function(){
        $('#tablaForm').submit(function(e){
            e.preventDefault();
            var numero = $('#numero').val();
            $.ajax({
                type: 'POST',
                url: 'tabla_multi.php',
                data: {numero: numero},
                success: function(data){
                    $('#tablaResult').html(data);
                }
            });
        });
    });
</script>

</body>
</html>
