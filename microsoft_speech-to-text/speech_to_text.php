<?php
require 'vendor/autoload.php';

use Microsoft\CognitiveServices\Speech\SpeechConfig;
use Microsoft\CognitiveServices\Speech\SpeechRecognitionResult;
use Microsoft\CognitiveServices\Speech\SpeechRecognizer;

function get() {
    $speechKey = 'VOTRE_CLE_API';
    $serviceRegion = 'REGION_DU_SERVICE'; // par exemple, "westus"

    $speechConfig = SpeechConfig::fromSubscription($speechKey, $serviceRegion);
    $recognizer = new SpeechRecognizer($speechConfig);

    echo 'Say Something...!' . PHP_EOL;

    $result = $recognizer->recognizeOnceAsync();
    if ($result->getReason() === ResultReason::RecognizedSpeech) {
        echo "You Said, " . $result->getText() . PHP_EOL;
    } else {
        echo "Recognition Failed: " . $result->getErrorDetails() . PHP_EOL;
    }
}

get();
?>
