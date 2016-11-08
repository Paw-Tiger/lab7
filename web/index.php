<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>HTML Document</title>
</head>
<body>

<div class="wrap">
<?php

require_once __DIR__.'/../vendor/autoload.php';
$config_path = __DIR__.'/../KDAcore/config/config.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use KDAWebLab\KDACore as KDACore;
$app = KDACore::getInstance();
$app->run($config_path);

?>
</div>
</body>
</html>