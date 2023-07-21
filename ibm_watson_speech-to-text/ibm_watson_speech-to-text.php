<?php
require 'vendor/autoload.php';

use IBM\Watson\SpeechToTextV1;
use IBM\Watson\Authenticator;

function get() {
    $ibmApiKey = 'VOTRE_CLE_API';
    $ibmApiUrl = 'URL_DU_POINT_DE_TERMINAISON';

    $authenticator = new Authenticator([
        'apikey' => $ibmApiKey,
    ]);
    $speechToText = new SpeechToTextV1([
        'authenticator' => $authenticator,
    ]);
    $speechToText->setServiceUrl($ibmApiUrl);

    echo 'Say Something...!' . PHP_EOL;

    $audioFile = 'chemin_vers_votre_fichier_audio.wav';
    $result = $speechToText->recognize(
        fopen($audioFile, 'r'),
        [
            'model' => 'fr-FR_NarrowbandModel', // Remplacez par le modèle de langue approprié
        ]
    );

    echo 'You Said: ' . $result->getResult()['results'][0]['alternatives'][0]['transcript'] . PHP_EOL;
}

get();
?>
