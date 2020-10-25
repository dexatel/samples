<?php
$data = [
    'phone' => '12025550150',
    'sender_name' => 'My Company',
    'message' => 'My first SMS',
];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.dexatel.com/v1/send/sms/quick",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "token: TOKEN",
        "Content-Type: application/json",
    ],
]);
$response = curl_exec($curl);
curl_close($curl);
echo $response;
