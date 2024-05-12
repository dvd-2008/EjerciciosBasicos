<?php
class Pais {
    public $nombre;
    public $poblacion;
    public $extension;
    public $banderaUrl;

    public function __construct($nombre, $poblacion, $extension, $banderaUrl) {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->extension = $extension;
        $this->banderaUrl = $banderaUrl;
    }
}

$paises_sudamerica = array(
    new Pais("Argentina", 45000000, 2780400, "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1280px-Flag_of_Argentina.svg.png"),
    new Pais("Brasil", 213000000, 8515767, "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1280px-Flag_of_Brazil.svg.png"),
    new Pais("Chile", 19100000, 756102, "https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/1280px-Flag_of_Chile.svg.png"),
    new Pais("Colombia", 50300000, 1141748, "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/1280px-Flag_of_Colombia.svg.png"),
    new Pais("Ecuador", 17400000, 276841, "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Flag_of_Ecuador.svg/1280px-Flag_of_Ecuador.svg.png"),
    new Pais("Perú", 32900000, 1285216, "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Peru.svg/1280px-Flag_of_Peru.svg.png"),
    new Pais("Uruguay", 3500000, 176215, "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/1280px-Flag_of_Uruguay.svg.png"),
    new Pais("Paraguay", 7200000, 406752, "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Paraguay.svg/1280px-Flag_of_Paraguay.svg.png"),
    new Pais("Venezuela", 28800000, 916445, "https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Flag_of_Venezuela.svg/1280px-Flag_of_Venezuela.svg.png"),
    new Pais("Bolivia", 11600000, 1098581, "https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Bolivia.svg/1280px-Flag_of_Bolivia.svg.png")
);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nombre_pais'])) {
    $nombre_pais = mb_strtolower($_GET['nombre_pais']); // Convertir a minúsculas
    $nombre_pais = str_replace(['á', 'é', 'í', 'ó', 'ú', 'ü'], ['a', 'e', 'i', 'o', 'u', 'u'], $nombre_pais); // Remover tildes
    foreach ($paises_sudamerica as $pais) {
        $nombre_pais_lista = mb_strtolower($pais->nombre); // Convertir a minúsculas
        $nombre_pais_lista = str_replace(['á', 'é', 'í', 'ó', 'ú', 'ü'], ['a', 'e', 'i', 'o', 'u', 'u'], $nombre_pais_lista); // Remover tildes
        if ($nombre_pais_lista == $nombre_pais) {
            echo json_encode($pais);
            exit;
        }
    }
    echo json_encode(['error' => 'País no encontrado']);
}
?>
