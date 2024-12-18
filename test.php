<?php

require 'vendor/autoload.php';
use MongoDB\Client;

$uri = "mongodb+srv://aymanemoongraph:0ivc78Oqhkmd8kQ4@cluster0.1gmdc.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0";
try {
    $client = new Client($uri);
    $database = $client->selectDatabase('moongraphe');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

