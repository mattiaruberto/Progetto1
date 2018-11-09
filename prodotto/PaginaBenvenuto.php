<!DOCTYPE HTML>  
<html>
  <head>
    <link rel="shortcut icon" href="icon/website.png"/>
        
    <!--chrome-->  
      
    <title>Pagina di benvenuto</title>
      
    <meta name="author" content="Mattia Ruberto">
          
    <meta charset="UTF-8">
        
    <meta name="description" content="sito web">
        
    <meta name="date" content="09.11.2018">

    <style>
      h1{
        text-align: center;
        margin-top: 50px;
        font-size: 80px;
        text-shadow: 0px 0px 7px rgba(45, 0, 0, 0.75);
      }
      .myButton {
        margin-top: 50px;
        margin-bottom: 600px;
        -moz-box-shadow:inset 0px 1px 0px 0px #3dc21b;
        -webkit-box-shadow:inset 0px 1px 0px 0px #3dc21b;
        box-shadow:inset 0px 1px 0px 0px #3dc21b;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #69d62f));
        background:-moz-linear-gradient(top, #44c767 5%, #69d62f 100%);
        background:-webkit-linear-gradient(top, #44c767 5%, #69d62f 100%);
        background:-o-linear-gradient(top, #44c767 5%, #69d62f 100%);
        background:-ms-linear-gradient(top, #44c767 5%, #69d62f 100%);
        background:linear-gradient(to bottom, #44c767 5%, #69d62f 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#69d62f',GradientType=0);
        background-color:#44c767;
        -moz-border-radius:20px;
        -webkit-border-radius:20px;
        border-radius:20px;
        border:4px solid #004707;
        display:inline-block;
        cursor:pointer;
        color:#0c3014;
        font-family:Arial;
        font-size:28px;
        font-weight:bold;
        padding:32px 76px;
        text-decoration:none;
        text-shadow:0px 0px 0px #1b2e18;
      }
      .myButton:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #69d62f), color-stop(1, #44c767));
        background:-moz-linear-gradient(top, #69d62f 5%, #44c767 100%);
        background:-webkit-linear-gradient(top, #69d62f 5%, #44c767 100%);
        background:-o-linear-gradient(top, #69d62f 5%, #44c767 100%);
        background:-ms-linear-gradient(top, #69d62f 5%, #44c767 100%);
        background:linear-gradient(to bottom, #69d62f 5%, #44c767 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#69d62f', endColorstr='#44c767',GradientType=0);
        background-color:#69d62f;
      }
      .myButton:active {
        position:relative;
        top:1px;
      }
      #centerButton{
        text-align: center;
      }
      p{
        margin-left: 20%;
        margin-right: 20%;
        margin-top: 50px;
        text-align: center;
        font-size: 30px;
      }
      body {
        height: 100%;
        width: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
      }
    </style>
  </head>
  <body>  
    <div>
    <h1>Benvenuto
    </h1>
    <p>Questo sito rappresenta il progetto consegnato a degli allievi di terza alla scuola arti e mestieri di trevano sezione informatici, il progetto assegnato nella lezione del modulo 306 è quello di creare un sito web dove fosse possibile registrarsi, in questo sito web ci dovrà essere una pagina di benvenuto, una pagina di registrazione dove l'utente inserirà le proprie informazioni e decidere se proseguire o cancellare tutto il form, una pagina di controllo dove l'utente potra controllare i dati inseriti e decidere se cancellarli o pregistrarsi ed in fine una pagina di riepilogo di tutti gli account giornalieri registrati.
    </p>
    <p id="centerButton">
      <a href="PaginaRegistrazione.php" class="myButton">REGISTRATI</a>
    </p>
    <div>
  </body>
</html>