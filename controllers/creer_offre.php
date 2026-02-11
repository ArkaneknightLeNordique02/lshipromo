<?php
echo '<pre>';
print_r($_POST);
echo'</pre>';
$dossier_database = __DIR__ .'/../database/';
if(!is_dir($dossier_database)){
    mkdir($dossier_database,0755,true);
}
?>