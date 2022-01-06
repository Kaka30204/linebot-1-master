<?php
$access_token = 'UnzViP6pcZW7eahsQNwQNlYlAhmQJ16OYn1oRCTVWz8EPUrz2ygV/q73Q8Z4zfcAWwwqPAKRE+P+6luFM66US84rSIZxjoA7nDWKP8dTeb6XG0MUvoCRi3v+0irHeDA2fb1wXLvpH+vJosljwMHCjQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
