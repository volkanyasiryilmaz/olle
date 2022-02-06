<?php

$morse=["-----",".----","..---","...--","....-",".....","-....","--...","---..","----.", //SAYILAR    
".-.-.-","--..--","..--..",".----.","-.-.--","-..-.",//NOKTALAMA İŞARETLERİ
".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--",
"-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--..",
"-.-..","--.-.",".-..-","---.",".--..","..--" //harfler

];
$alpahet=[
    "0","1","2","3","4","5","6","7","8","9",
    ".",",","?","'","-","!","/",
    "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X",
"Y","Z","Ç","Ğ","İ","Ö","Ş","Ü"];


echo "<pre>";
print_r($morse);
print_r($alpahet);
echo "</pre>";

$sonuc=str_replace($morse,$alpahet,"-.... --... ....- -.... ..... -.... ---.. ....-");
echo $sonuc;






echo "<br/> <br/>";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://ik.olleco.net/morse-api/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "command=-.-. .--. ..-");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
echo $server_output;

$server_output=json_encode($server_output);
$server_output=explode('"',$server_output);


echo "<pre>";
print_r($server_output);
echo "</pre>";




curl_close ($ch);

// Further processing ...
// if ($server_output == "OK") { ... } else { ... }
?>

