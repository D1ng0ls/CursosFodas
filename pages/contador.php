<?php
    $file = "contador.txt";
    $handle = fopen($file, 'r+');
    $data = fread($handle, 512);
    $contar = $data + 1;
    fseek($handle, 0);
    fwrite($handle, $contar);
    fclose($handle);
?>

<?php
    include("pages/contador.php");
    $data = date("Y-m-d");
    $textTop = "<span class='container-new'>";
    $textMiddle = "new-card";
    $textNew = "<span class='new'>New!</span>";
    $textBottom = "</span>";
    $data_expira = "2022-08-23"; //Alterar esse quando publicar algo novo
    $data_expira2 = "2022-07-25"; //Alterar esse quando publicar algo novo
?>

<?php if ($data_expira >= $data) echo $textTop; ?>

<?php if ($data_expira >= $data) echo $textMiddle; ?>

<?php if ($data_expira >= $data) echo $textNew; ?>

<?php if ($data_expira >= $data) echo $textBottom; ?>