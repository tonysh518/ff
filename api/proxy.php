<?php
$lang = 'eng';
$url = 'http://backoffice.fredfarid.com/' . $lang . '/ws/';

$ch = curl_init($url);
curl_setopt( $ch, CURLOPT_HEADER, 0 );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $_POST );
$contents = curl_exec( $ch );
curl_close( $ch );
echo $contents;