<?php
//MORSE ALPHAHET
$morse=["-----",".----","..---","...--","....-",".....","-....","--...","---..","----.", //SAYILAR    
".-.-.-","--..--","..--..",".----.","-.-.--","-..-.",//NOKTALAMA İŞARETLERİ
".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--",
"-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--..",
"-.-..","--.-.",".-..-","---.",".--..","..--" //harfler
];
//LATIN ALPHABET
$alphabet=[
    "0","1","2","3","4","5","6","7","8","9",
    ".",",","?","'","-","!","/",
    "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X",
"Y","Z","Ç","Ğ","İ","Ö","Ş","Ü"];
//Morse to Latin
function translate($morse,$alphabet, $will_be_translated){
  $translated=str_replace($morse, $alphabet, $will_be_translated);
  return $translated;
}
//API REQUEST WITH CURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://ik.olleco.net/morse-api/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "command=-.-. .--. ..-");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

$server_output_array=json_decode($server_output,true); // convert api to json format
$key1=array_keys($server_output_array)[0];
$key2=array_keys($server_output_array)[1];
$key2_in=($server_output_array)[$key2][0];
$key3=array_keys($key2_in)[0];
$key4=array_keys($key2_in)[1];
$key5=array_keys($key2_in)[2];
$key5_in=$key2_in[$key5];
$key6=array_keys($key5_in)[0];
$key7=array_keys($key5_in)[1];
$key8=array_keys($key5_in)[2];
$key9=array_keys($key5_in)[3];
$key10=array_keys($key5_in)[4];

$will_be_translated = [
$server_output_array[$key1],
$key2_in[$key3],
$key2_in[$key4],
$key5_in[$key6],
$key5_in[$key7],
$key5_in[$key8],
$key5_in[$key9],
$key5_in[$key10]
];

$latin = translate($morse,$alphabet,$will_be_translated);
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
            <th scope="col">Latin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $key1;?></td>
            <td><?php echo $server_output_array[$key1]; ?></td>
            <td><?php echo $latin[0];?></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><?php echo $key3;?> </td>
            <td><?php echo $key2_in[$key3];?><td>
            <td><?php echo $latin[1];?></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><?php echo $key4;?></td>
            <td><?php echo $key2_in[$key4]; ?></td>
            <td><?php echo $latin[2];?></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td><?php echo $key6;?></td>
            <td><?php echo $key5_in[$key6]; ?></td>
            <td><?php echo $latin[3];?></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td><?php echo $key7;?></td>
            <td><?php echo $key5_in[$key7];?></td>
            <td><?php echo $latin[4];?></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td><?php echo $key8;?></td>
            <td><?php  echo $key5_in[$key8]; ?></td>
            <td><?php echo $latin[5];?></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td><?php echo $key9; ?></td>
            <td><?php echo $key5_in[$key9]; ?></td>
            <td><?php echo $latin[6];?></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td><?php echo $key10; ?></td>
            <td><?php echo $key5_in[$key10]; ?> </td>
            <td><?php echo $latin[7];?></td>
          </tr>
          
        </tbody>
    </table>
    </div>
</body>
</html>