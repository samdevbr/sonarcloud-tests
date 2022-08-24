<?php

$payload = $_GET['payload'];
$payload = unserialize(base64_decode($payload));

echo $payload;
