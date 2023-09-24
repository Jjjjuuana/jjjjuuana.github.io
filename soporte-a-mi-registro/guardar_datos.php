<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];

    // Abre el archivo en modo escritura (si no existe, se crea)
    $archivo = fopen("datos_formulario.txt", "a");

    // Verifica si la apertura del archivo fue exitosa
    if ($archivo) {
        // Escribe los datos en el archivo
        fwrite($archivo, "Nombre: " . $nombre . "\n");
        fwrite($archivo, "Contraseña: " . $contrasena . "\n");

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
