<?php
function get() {
    $witAccessToken = 'VOTRE_JETON_D_ACCES';
    $audioFile = 'chemin_vers_votre_fichier_audio.wav';

    echo 'Say Something...!' . PHP_EOL;

    // Convertir le fichier audio en base64
    $audioBase64 = base64_encode(file_get_contents($audioFile));

    // Envoyer la requête POST à l'API Wit.ai
    $url = 'https://api.wit.ai/speech?v=20210418';
    $headers = [
        'Authorization: Bearer ' . $witAccessToken,
        'Content-Type: audio/wav',
    ];
    $data = [
        'file' => $audioBase64,
    ];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($response, true);
    if (isset($result['_text'])) {
        echo 'You Said: ' . $result['_text'] . PHP_EOL;
    } else {
        echo 'Recognition Failed.' . PHP_EOL;
    }
}

get();
?>
