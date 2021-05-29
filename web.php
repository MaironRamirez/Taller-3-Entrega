<?php

$fileHtml = "";
if (!empty($_GET['page'])) {
    $view = !empty($_GET['view']) ? $_GET['view'] : 'list';
    $fileHtml = "/Taller_3_Programacion/views/$_GET[page]/$view.php";
} else {
    $fileHtml = '/Taller_3_Programacion/views/welcome.php';
}

require_once dirname(__DIR__) . $fileHtml;