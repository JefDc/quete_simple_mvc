<?php
// chargement de l'autoload en début de fichier
require __DIR__ . '/../vendor/autoload.php';
//...

use Controller\ItemController;
$index = new ItemController();
echo $index->index();

?>