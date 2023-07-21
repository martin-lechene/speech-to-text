<?php
require 'vendor/autoload.php';

use Google\Cloud\Speech\SpeechClient;

function get() {
    $speechKey = 'VOTRE_CLE_API';

    $speech = new SpeechClient([
        'key' => $speechKey,
    ]);

    echo 'Say Something...!' . PHP_EOL;

    $audioFile = 'chemin_vers_votre_fichier_audio.wav';
    $results = $speech->recognize(
        fopen($audioFile, 'r'),
        [
            'languageCode' => 'fr-FR', // Remplacez par le code de la langue appropriée
        ]
    );

    foreach ($results as $result) {
        echo 'You Said: ' . $result['transcript'] . PHP_EOL;
    }
}

get();
?>
