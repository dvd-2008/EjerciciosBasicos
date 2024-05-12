<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Potencia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="segundo.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4 titulo">Calculadora de Potencia</h2>
            <form id="potenciaForm">
                <div class="form-group">
                    <label for="base">Base:</label>
                    <input type="number" class="form-control" id="base" name="base" required>
                </div>
                <div class="form-group">
                    <label for="potencia">Potencia:</label>
                    <input type="number" class="form-control" id="potencia" name="potencia" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Calcular</button>
            </form>
            <div id="resultado" class="mt-4 resultado"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="codigo2.js"></script>

</body>
</html>
