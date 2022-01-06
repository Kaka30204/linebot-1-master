 <?php
  

function send_LINE($msg){
 $access_token = 'UnzViP6pcZW7eahsQNwQNlYlAhmQJ16OYn1oRCTVWz8EPUrz2ygV/q73Q8Z4zfcAWwwqPAKRE+P+6luFM66US84rSIZxjoA7nDWKP8dTeb6XG0MUvoCRi3v+0irHeDA2fb1wXLvpH+vJosljwMHCjQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uff3932b9af6a83a4cbcd6701a7ea962f',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
