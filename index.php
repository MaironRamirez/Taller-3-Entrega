<?php

$conf = 'api';

$fileHtml = $conf == 'api' ? '/Taller_3_Programacion/api.php' : '/Taller_3_Programacion/web.php';
require_once dirname(__DIR__) . $fileHtml;
