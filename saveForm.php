<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $linkName = $_POST['link-name'];
    $linkUrl = $_POST['link-url'];
    $linkText = $_POST['link-text'];

    $data = $linkName . "|" . $linkUrl . "|" . $linkText . "\n";

    $file = 'links.txt';

    if (!file_exists($file)) {
        touch($file);
    }

    if (is_writable($file)) {
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
        echo "La información del formulario se ha guardado en el archivo. \n";
        echo "\n Redireccionando en 3 segundos...";
        header( "refresh:3; url=http://localhost/moodle/local/infocvuv/tutoriales.php" );
    } else {
        echo "El archivo no tiene permisos de escritura.";
    }
}
?>
