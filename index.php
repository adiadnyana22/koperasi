<?php
header("Access-Control-Allow-Origin: *");
if ( !session_id() ) session_start();

require_once 'app/init.php';

$app = new App;