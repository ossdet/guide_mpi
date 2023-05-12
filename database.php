<?php
//$cnx = null;
$dest = 'mysql:host=localhost;dbname=guide_mpi_db';
$user = 'root';
$pass = '';
try {
    $cnx = new PDO($dest, $user, $pass);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection success";
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}

?>

