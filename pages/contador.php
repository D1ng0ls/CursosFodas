<?php
    $file = "contador.txt";
    $handle = fopen($file, 'r+');
    $data = fread($handle, 512);
    $contar = $data + 1;
    fseek($handle, 0);
    fwrite($handle, $contar);
    fclose($handle);
?>