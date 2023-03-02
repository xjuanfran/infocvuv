<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $linkName = $_POST['link-name'];
    $linkUrl = $_POST['link-url'];
    $linkText = $_POST['link-text'];

    $data = "Link name: " . $linkName . "\nLink URL: " . $linkUrl . "\nLink Text: " . $linkText . "\n\n";

    $file = 'links.txt';

    if (!file_exists($file)) {
        touch($file);
    }

    if (is_writable($file)) {
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
        echo "La información del formulario se ha guardado en el archivo.";
    } else {
        echo "El archivo no tiene permisos de escritura.";
    }
}
?>
