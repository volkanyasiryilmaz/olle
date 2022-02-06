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
// echo $server_output;

$server_output=json_decode($server_output,true);
echo "<pre>";
print_r($server_output);
echo "</pre>";
echo "<br/><br/>";
$key1=array_keys($server_output)[0];
$key2=array_keys($server_output)[1];


curl_close ($ch);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Data</th>
            <th scope="col">Morse</th>
            <th scope="col">Convert to Latin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $key1;?></td>
            <td>-.... --... ....- -.... ..... -.... ---.. ....-</td>
            <td>67465684</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>model</td>
            <td>.- -- -.. / .-. -.-- --.. . -. / ----. / ...-- ----. ----- ----- / .---- ..--- -....- -.-. --- .-. . / .--. .-. --- -.-. . ... ... --- .-.</td>
            <td>amd ryzen 9 3900 12-core processor</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>speed</td>
            <td>..--- .---- ----. .....</td>
            <td>2195</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>user</td>
            <td>.---- ....- ---.. ..--- ----. -.... ----- -----</td>
            <td>14829600</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>nice</td>
            <td>-----</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>sys</td>
            <td>-----</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>idle</td>
            <td>....- ..--- .---- ----. ..... -.... ....- ...-- ..... -.... ----- -----</td>
            <td>421956435600</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>irq</td>
            <td>-----</td>
            <td>0</td>
          </tr>
          
        </tbody>
    </table>
    </div>
</body>
</html>