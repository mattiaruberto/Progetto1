<!DOCTYPE HTML>
<html>

<head>
    <link rel="shortcut icon" href="icon/website.png"/>
        
    <!--chrome-->  
      
    <title>Pagina di riepilogo</title>
      
    <meta name="author" content="Mattia Ruberto">
          
    <meta charset="UTF-8">
        
    <meta name="description" content="sito web">
        
    <meta name="date" content="09.11.2018">
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        body {
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
            margin: 0;
            font-family: Arial
        }
        input {
            margin-left: auto;
            margin-right: auto;
        }
        h1 {
            text-align: center;
            font-size: 50px;
            margin-bottom: 100px;
            margin-top: 70px;
        }
        .myButton {
            margin-top: 50px;
            margin-bottom: 100px;
            -moz-box-shadow: inset 0px 1px 0px 0px #3dc21b;
            -webkit-box-shadow: inset 0px 1px 0px 0px #3dc21b;
            box-shadow: inset 0px 1px 0px 0px #3dc21b;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #69d62f));
            background: -moz-linear-gradient(top, #44c767 5%, #69d62f 100%);
            background: -webkit-linear-gradient(top, #44c767 5%, #69d62f 100%);
            background: -o-linear-gradient(top, #44c767 5%, #69d62f 100%);
            background: -ms-linear-gradient(top, #44c767 5%, #69d62f 100%);
            background: linear-gradient(to bottom, #44c767 5%, #69d62f 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#69d62f', GradientType=0);
            background-color: #44c767;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            border: 4px solid #004707;
            display: inline-block;
            cursor: pointer;
            color: #0c3014;
            font-family: Arial;
            font-size: 28px;
            font-weight: bold;
            padding: 32px 76px;
            text-decoration: none;
            text-shadow: 0px 0px 0px #1b2e18;
        }
        .myButton:hover {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #69d62f), color-stop(1, #44c767));
            background: -moz-linear-gradient(top, #69d62f 5%, #44c767 100%);
            background: -webkit-linear-gradient(top, #69d62f 5%, #44c767 100%);
            background: -o-linear-gradient(top, #69d62f 5%, #44c767 100%);
            background: -ms-linear-gradient(top, #69d62f 5%, #44c767 100%);
            background: linear-gradient(to bottom, #69d62f 5%, #44c767 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#69d62f', endColorstr='#44c767', GradientType=0);
            background-color: #69d62f;
        }
        .myButton:active {
            position: relative;
            top: 1px;
        }
        #centerButton {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 100px;
        }
    </style>
</head>
<body>

<?php
chdir("Registrazioni");

$day = (string) date("j");
$month = (string) date("m");
$year = (string) date("Y");

$nomePercorsoTutte = "/Registrazioni/Registrazioni_tutte.csv";
$fileNameDay = "Registrazioni_" . $year . "-" . $month . "-" . $day . ".csv";
$nomePercorsoGiorno = "/Registrazioni/" . $fileNameDay;

$table = "<div class='container-table100'>
         <div class='wrap-table100'>
         <h1>Pagina registrazioni giornaliere</h1>
         <div class='table100'>
         <table>";

$file = fopen($fileNameDay, "r");
while (!feof($file)) {
    $array = fgetcsv($file);
    if ($array[0] != null) {
        $table .= "<tr>";
        for ($i = 0; $i < count($array); $i++) {
            $table .= "<th class='text-left'>" . $array[$i] . "</th>";
        }
        $table .= "</tr>";
    }
}
fclose($file);

$table .= "</table>
          </div>
          <p id='centerButton'><a href='PaginaBenvenuto.php' class='myButton'>PAGINA INIZIALE</a></p>
          </div>
          </div>";
echo $table;
?>
</body>

</html>