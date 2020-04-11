<?php

$archivo=basename($_SERVER['PHP_SELF']);
$pagina= str_replace('.php','',$archivo);

$archivoCache='cache/'.$pagina.'.html';
$tiempo =36000;

if(isset($_GET['id']) ){
    $archivoCache='cache/'.$pagina.'-'.$_GET['id'].'.html';
}else{
    $archivoCache='cache/'.$pagina.'.html';
}


if(file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)){
    include($archivoCache);
    exit;
}
?>

<?php

$fp= fopen($archivoCache, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);

ob_end_flush();

?>