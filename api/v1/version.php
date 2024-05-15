<?php
$json = [ 'ver' => '3.0.0' ];
header('Content-type: application/json');
echo json_encode( $json );
?>