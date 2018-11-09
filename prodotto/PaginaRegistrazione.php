<!DOCTYPE HTML>
<html>
<head>
    <link rel="shortcut icon" href="icon/website.png"/>
        
    <!--chrome-->  
      
    <title>Pagina di registrazione</title>
      
    <meta name="author" content="Mattia Ruberto">
          
    <meta charset="UTF-8">
        
    <meta name="description" content="sito web">
        
    <meta name="date" content="09.11.2018">
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
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
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
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
            margin-left: auto;
            margin-top: auto;
            margin-right: auto;
            margin-bottom: 500px;
            width: 70%;
            padding: 10px;
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
            border-radius: 5px;
            height: 30px;
            margin: auto;
            width: 100%;
            padding: 10px;
            font-size: 25px;
        }
        .mySelect {
            border-radius: 5px;
            height: 50px;
            margin: auto;
            width: 100%;
            padding: 10px;
            font-size: 25px;
        }
        .myLabel {
            font-size: 25px;
        }
        .myError {
            border-style: solid;
            border-radius: 5px;
            border-color: rgb(255, 0, 0);
            font-size: 15px;
            margin-top: 10px;
            margin: auto;
            width: 40%;
            padding: 5px;
            display: block;
            margin-top: 50px;
        }
    </style>
</head>
<script src="javascript\validazioneUtente.js"></script>

<body>
    <h1>Pagina di registrazione</h1>
    <form action="PaginaControllo.php" method="get" id="myForm">
        <div class="myDiv">
            <form role='form'>
                <div class="myText">
                    <label class="myLabel">Nome*</label>
                    <div class="myContains">
                        <input class="myInput" onchange="stringControl(this.id,1,50)" id="nome" name="nome"></input>
                    </div>
                    <label class="myLabel">Cognome*</label>
                    <div class="myContains">
                        <input class="myInput" onchange="stringControl(this.id,1,50)" id="cognome" name="cognome"></input>
                    </div>
                    <label class="myLabel">Data di nascita*</label>
                    <div class="myContains">
                        <div>
                            <input class="myInput" id="data" name="data" type='date'>
                        </div>
                    </div>
                    <label class="myLabel">Indirizzo*</label>
                    <div class="myContains">
                        <input class="myInput" name="indirizzo" id="indirizzo" placeholder="Via ..." onchange="stringControl(this.id,1,50)"></input>
                    </div>
                    <label class="myLabel">Citta&#x0060</label>
                    <div class="myContains">
                        <input class="myInput" onchange="stringControl(this.id,1,50)" id="citta" name="citta"></input>
                    </div>
                    <label class="myLabel">Numero civico*</label>
                    <div class="myContains">
                        <input class="myInput" id="numeroCivico" name="numCivico" onchange="stringTextNumber(this.id,1,4)"></input>
                    </div>
                    <label class="myLabel">Numero di telefono*</label>
                    <div class="myContains">
                        <input class="myInput" id="cell" name="telefono" onchange="validatePhone(this.id)" placeholder="+41 70 267 00 65"></input>
                    </div>
                    <label class="myLabel">Numero di avviamento postale*</label>
                    <div class="myContains">
                        <input class="myInput" id='cap' name="cap" onchange="numberControl(this.id,3,5)"></input>
                    </div>
                    <label class="myLabel">Email*</label>
                    <div class="myContains">
                        <input class="myInput" type="email" name="email" onchange="controlEmail()" id="email"></input>
                    </div>
                    <label class="myLabel">Genere*</label>
                    <div class="myContains">
                        <select class="mySelect" id='genere' name="genere">
                            <option></option>
                            <option>M</option>
                            <option>F</option>
                            <option>Altro</option>
                        </select>
                    </div>
                    <label class="myLabel">Hobby</label>
                    <div class="myContains">
                        <input class="myInput" id='hobby' name="hobby" onchange="stringTextNumber(this.id,1,500)"></input>
                    </div>
                    <label class="myLabel">Professione</label>
                    <div>
                        <input class="myInput" id="professione" name="professione" onchange="stringTextNumber(this.id,1,500)"></input>
                    </div>
                </div>
                <div class="myDivButton">
                    <input class="myButton" type='button' onclick="convalidation()" value="Avanti"></input>
                    <input class="myButton" type="button" style='float:right' onclick="resetForm()" value="Cancella"></input>
                </div>
                <div class="myError">
                    <p id='attenzione'><b>I campi obbligatori sono contrassegnati dall' *<b></p>
                    <p id="erroreNome"></p>
                    <p id="erroreCognome"></p>
                    <p id="erroreData"></p>
                    <p id="erroreCitta"></p>
                    <p id="erroreIndirizzo"></p>
                    <p id="erroreCitta"></p>
                    <p id="erroreCivico"></p>
                    <p id="erroreTelefono"></p>
                    <p id="erroreCap"></p>
                    <p id="erroreEmail"></p>
                    <p id="erroreGenere"></p>
                    <p id="erroreHobby"></p>
                    <p id="erroreProfessione"></p>
                </div>
            </form>
        </div>
    </form>
</body>
</html>