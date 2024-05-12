<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['base']) && isset($_POST['potencia'])) {
        $base = $_POST['base'];
        $potencia = $_POST['potencia'];

    
        $resultado = pow($base, $potencia);

        echo $resultado;
    } else {
        echo "Error: Base y potencia son necesarios.";
    }
}
?>
