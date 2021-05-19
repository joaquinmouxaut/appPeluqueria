<?php

$db = mysqli_connect( 'bexuwexa3lwfp7kcye6l-mysql.services.clever-cloud.com', 'uwzjtlxxgdlucnzd', 'rMXjeD5IGTW1JreKwblE', 'bexuwexa3lwfp7kcye6l' );
$db->set_charset('utf8');

if(!$db) {
    echo 'Error de conexión';
    exit;
}