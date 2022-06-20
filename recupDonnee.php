<?php

$curlCasMonde = curl_init('https://covid19.mathdro.id/api');

curl_setopt_array($curlCasMonde, [
    CURLOPT_CAINFO => __DIR__.DIRECTORY_SEPARATOR.'certificat.cer',
    CURLOPT_RETURNTRANSFER => true
]);

$dataCasMonde = curl_exec($curlCasMonde);

if ($dataCasMonde === false ) {
    var_dump(curl_error($curlCasMonde));
} else {
    $dataCasMonde = json_decode($dataCasMonde,true);
}


$curlCasFrance = curl_init('https://covid19.mathdro.id/api/countries/FR');

curl_setopt_array($curlCasFrance, [
    CURLOPT_CAINFO => __DIR__.DIRECTORY_SEPARATOR.'certificat.cer',
    CURLOPT_RETURNTRANSFER => true
]);

$dataCasFrance = curl_exec($curlCasFrance);

if ($dataCasFrance === false ) {
    var_dump(curl_error($curlCasFrance));
} else {
    $dataCasFrance = json_decode($dataCasFrance,true);
}

//Image

$curlImage = curl_init('https://covid19.mathdro.id/api/og');

curl_setopt_array($curlImage, [
    CURLOPT_CAINFO => __DIR__.DIRECTORY_SEPARATOR.'certificat.cer',
    CURLOPT_RETURNTRANSFER => true
]);

$dataImage = curl_exec($curlImage);

//Date
$date = new DateTime();
$date->modify('+2 hour');
$date = $date->format('d-m-Y H:i:s');
