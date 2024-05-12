<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado un número válido
    if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
        $numero = $_POST['numero'];

        $tabla = "<h3>Tabla de Multiplicar del $numero:</h3>";
        $tabla .= "<table class='table table-bordered'>";
        for ($i = 1; $i <= 10; $i++) {
            $tabla .= "<tr>";
            $tabla .= "<td>$numero</td>";
            $tabla .= "<td>x</td>";
            $tabla .= "<td>$i</td>";
            $tabla .= "<td>=</td>";
            $tabla .= "<td>" . ($numero * $i) . "</td>";
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";

        echo $tabla;
    } else {
        echo "<p class='text-danger'>Por favor, ingresa un número válido.</p>";
    }
}
?>
