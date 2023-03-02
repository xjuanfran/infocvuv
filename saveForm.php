<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $linkName = $_POST['link-name'];
    $linkUrl = $_POST['link-url'];
    $linkText = $_POST['context'];

    $data = $linkName . "|" . $linkUrl . "|" . $linkText . "\n";

    $file = 'tutorial.txt';

    if (!file_exists($file)) {
        touch($file);
    }

    if (is_writable($file)) {
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
        echo "La información del formulario se ha guardado en el archivo. Redireccionando en 5 segundos...";
        clearstatcache();
        header( "refresh:5; url=http://localhost/moodle/local/infocvuv/tutoriales.php" );
    } else {
        echo "El archivo no tiene permisos de escritura.";
    }
}
?>
