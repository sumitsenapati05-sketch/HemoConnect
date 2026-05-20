<?php

header("Content-Type: application/json");

/* USER MESSAGE */

$userMessage = $_POST['message'];

/* GEMINI API KEY */

$apiKey = "AIzaSyBHxFLsWme4ygRRNAkA2-1ff_lDE8Vdy2Y";

/* GEMINI URL */

$url =
"https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=".$apiKey;

/* DATA */

$data = [

"contents" => [[

"parts" => [[

"text" =>
"You are HemoAI, a smart AI blood donation assistant for HemoConnect website. Answer briefly, clearly and helpfully. User question: ".$userMessage

]]

]]

];

/* CURL */

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, [

"Content-Type: application/json"

]);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

curl_close($ch);

/* RESPONSE */

$result = json_decode($response, true);
/* DEBUG */

if(isset($result['error'])){

echo json_encode([

"reply" => "❌ ".$result['error']['message']

]);

exit;

}

$reply =
$result['candidates'][0]['content']['parts'][0]['text']
?? "Sorry, I could not answer that.";

/* SEND BACK */

echo json_encode([

"reply" => $reply

]);

?>