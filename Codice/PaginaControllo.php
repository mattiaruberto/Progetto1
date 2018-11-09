<!DOCTYPE HTML>
<html>

<head>
    <style>
        input {
            margin-left: auto;
            margin-right: auto;
        }
        h1 {
            text-align: center;
            margin-top: 150px;
            margin-bottom: 150px;
            font-size: 50px;
        }
        body {
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
        }
        body {
            margin: 0;
            font-family: Arial
        }
        label {
            margin-top: 10px;
            height: 50px;
        }
        .myDiv {
            border-style: solid;
            border-radius: 10px;
            background: white;
            margin: auto;
            width: 70%;
            padding: 10px;
            margin-bottom: 500px;
        }
        .myContains {
            margin-bottom: 10px;
        }
        .myText {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
        .myDivButton {
            margin: auto;
            width: 40%;
            padding: 10px;
        }
        .myButton {
            border-radius: 5px;
            border-color: rgb(35, 115, 200);
            background: rgb(35, 115, 200);
            color: white;
            height: auto;
            width: auto;
            font-size: 200%;
            margin-bottom: 10px;
        }
        .myInput {
            border-style: solid;
            border-radius: 10px;
            border-width: 3px;
            height: 30px;
            margin: auto;
            width: 100%;
            padding: 5px;
            font-size: 2em;
            margin-top: 10px;
        }
        .myLabel {
            font-size: 25px;
        }
    </style>
    <script type="text/javascript">
        function backToPage() {
            window.location.href = "javascript:history.go(-1)";
        }
    </script>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set('Europe/Rome');
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $indice = "Ora;Data;Nome;Cognome;DataDiNascita;Indirizzo;Città;NumeroCivico;NumeroDiTelefono;CAP;Email;Genere;Hobby;Professione";
    $day    = (string) date("j");
    $month  = (string) date("m");
    $year   = (string) date("Y");
    
    if (!is_dir("Registrazioni")) {
        mkdir("Registrazioni");
    }
    
    $nomePercorsoTutte  = "/Registrazioni/Registrazioni_tutte.csv";
    $fileNameDay        = "Registrazioni_" . $year . "-" . $month . "-" . $day . ".csv";
    $nomePercorsoGiorno = "/Registrazioni/" . $fileNameDay;
    
    chdir("Registrazioni");
    
    if (!file_exists($fileNameDay)) {
        $f = fopen($fileNameDay, "a");
        fputcsv($f, explode(';', $indice));
        fclose($f);
    }
    
    if (!file_exists("Registrazioni_tutte.csv")) {
        $f = fopen("Registrazioni_tutte.csv", "a");
        fputcsv($f, explode(';', $indice));
        fclose($f);
    }
    
    $name        = test_input($_GET["nome"]);
    $cognome     = test_input($_GET["cognome"]);
    $data        = test_input($_GET["data"]);
    $indirizzo   = test_input($_GET["indirizzo"]);
    $citta       = test_input($_GET["citta"]);
    $numCivico   = test_input($_GET["numCivico"]);
    $telefono    = test_input($_GET["telefono"]);
    $cap         = test_input($_GET["cap"]);
    $email       = test_input($_GET["email"]);
    $genere      = test_input($_GET["genere"]);
    $hobby       = test_input($_GET["hobby"]);
    $professione = test_input($_GET["professione"]);
    
    //Scrittura dei dati sui csv
    $dati = date('H:i:s').";".$year."-".$month."-".$day.";".$name.";".$cognome.";".$data.";".$indirizzo.";".$citta.";".$numCivico.";".$telefono.";".$cap.";".$email.";".$genere.";".$hobby.";".$professione;

    $file = fopen("Registrazioni_tutte.csv", "a");
    fputcsv($file, explode(';', $dati));
    fclose($file);

    $file = fopen($fileNameDay, "a");
    fputcsv($file, explode(';', $dati));
    fclose($file);
    
    header('Location: PaginaRegistrazioniGiornaliere.php');
}
?>

<body>
    <h1>Pagina di controllo</h1>
    <form method="post">
        <div class="myDiv">
            <form role='form' id="myForm">
                <div class="myText">
                    <label class="myLabel">Nome</label>
                    <div class="myContains">
                        <p class="myInput" name="nome" readonly>
                            <?php echo $_GET[ "nome"];?>
                        </p>
                    </div>
                    <label class="myLabel">Cognome</label>
                    <div class="myContains">
                        <p class="myInput" name="cognome" readonly>
                            <?php echo $_GET[ "cognome"];?>
                        </p>
                    </div>
                    <label class="myLabel">Data di nascita</label>
                    <div class="myContains">
                        <div>
                            <p class="myInput" name="data" readonly>
                                <?php echo $_GET[ "data"];?>
                            </p>
                        </div>
                    </div>
                    <label class="myLabel">Indirizzo</label>
                    <div class="myContains">
                        <p class="myInput" name="indirizzo" readonly>
                            <?php echo $_GET[ "indirizzo"];?>
                        </p>
                    </div>
                    <label class="myLabel">Citta&#x0060</label>
                    <div class="myContains">
                        <p class="myInput" name="citta" readonly>
                            <?php echo $_GET[ "citta"];?>
                        </p>
                    </div>
                    <label class="myLabel">Numero civico</label>
                    <div class="myContains">
                        <p class="myInput" name="numCivico" readonly>
                            <?php echo $_GET[ "numCivico"];?>
                        </p>
                    </div>
                    <label class="myLabel">Numero di telefono</label>
                    <div class="myContains">
                        <p class="myInput" name="telefono" readonly>
                            <?php echo $_GET[ "telefono"];?>
                        </p>
                    </div>
                    <label class="myLabel">Numero di avviamento postale</label>
                    <div class="myContains">
                        <p class="myInput" name="cap" readonly>
                            <?php echo $_GET[ "cap"];?>
                        </p>
                    </div>
                    <label class="myLabel">Email</label>
                    <div class="myContains">
                        <p class="myInput" name="email" readonly>
                            <?php echo $_GET[ "email"];?>
                        </p>
                    </div>
                    <label class="myLabel">Genere</label>
                    <div class="myContains">
                        <p class="myInput" name="genere" readonly>
                            <?php echo $_GET[ "genere"];?>
                        </p>
                    </div>
                    <label class="myLabel">Hobby</label>
                    <div class="myContains">
                        <p class="myInput" name="hobby" readonly>
                            <?php echo $_GET[ "hobby"];?>
                        </p>
                    </div>
                    <label class="myLabel">Professione</label>
                    <div class="myContains">
                        <p class="myInput" name="professione" readonly>
                            <?php echo $_GET[ "professione"];?>
                        </p>
                    </div>
                </div>
                <div class="myDivButton">
                    <input class="myButton" type='submit' value="Registra"></input>
                    <input class="myButton" type="button" style='float:right' onclick="backToPage()" value="Correggi"></input>
                </div>
            </form>
        </div>
    </form>
</body>
</html>