		
    //Controllo finale dei campi quando viene schiacciato il tasto avanti

    function convalidation(){
      //variabile che viene usata per controllare che tutti i campi siano corretti
      var check = true;

      //tutti gli elementi di testo dei possibili errori svuotati
      document.getElementById("erroreNome").innerHTML = ""; 
      document.getElementById("erroreCognome").innerHTML =  ""; 
      document.getElementById("erroreData").innerHTML =  "";  
      document.getElementById("erroreTelefono").innerHTML =  ""; 
      document.getElementById("erroreCitta").innerHTML =  "";
      document.getElementById("erroreIndirizzo").innerHTML =  "";
      document.getElementById("erroreTelefono").innerHTML =  ""; 
      document.getElementById("erroreCivico").innerHTML =  ""; 
      document.getElementById("erroreCap").innerHTML =  ""; 
      document.getElementById("erroreEmail").innerHTML =  ""; 
      document.getElementById("erroreGenere").innerHTML =  ""; 
      document.getElementById("erroreHobby").innerHTML =  "";
      document.getElementById("erroreProfessione").innerHTML = ""; 

      //Prendo tutti i valori dei campi da controllare
      var nome = document.getElementById("nome").value;
      var cognome = document.getElementById("cognome").value;
      var data = document.getElementById("data").value;
      var indirizzo = document.getElementById("indirizzo").value;
      var citta = document.getElementById("citta").value;
      var civico = document.getElementById("numeroCivico").value;
      var cell = document.getElementById("cell").value;
      var cap = document.getElementById("cap").value;
      var email = document.getElementById("email").value;
      var genere = document.getElementById("genere").value;
      var hobby = document.getElementById("hobby").value;
      var professione = document.getElementById("professione").value;

      //inizio una serie di if che convalidano tutti i campi e se è sbagliato mette la variabile ceck a false e setta il messaggio di errore da stampare all'utente
      if(!validateString(nome,1,50)){
        document.getElementById("erroreNome").innerHTML =  "Il campo nome non è valido"; 
        check = false;
      }
      if(!validateString(cognome,1,50)){
        document.getElementById("erroreCognome").innerHTML =  "Il campo cognome non è valido"; 
        check = false;
      }
      var dat = data.replace(/[-+()\s]/g, '');
      if(dat.length != 8){
        document.getElementById("erroreData").innerHTML =  "Il campo data non è valido";  
        check = false;
      }
      if(!validateString(indirizzo,1,50)){
        document.getElementById("erroreIndirizzo").innerHTML =  "Il campo indirizzo non è valido"; 
        check = false;
      }
      if(!validateString(citta,1,50)){
        document.getElementById("erroreCitta").innerHTML =  "Il campo citta non è valido"; 
        check = false;
      }
      if(!validatePhone(cell,10,30)){
        document.getElementById("erroreTelefono").innerHTML =  "Il il campo numero di telefono non è valido"; 
        check = false;
      }
      if(!validateNumberText(civico,1,4)){
        document.getElementById("erroreCivico").innerHTML =  "Il il campo numero civico non è valido"; 
        check = false;
      }
      if(!validateNumber(cap,3,5)){
        document.getElementById("erroreCap").innerHTML =  "Il il campo numero di avviamento postale non è valido"; 
        check = false;
      }
      let emailRegex = "[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}";
      if(!email.match(emailRegex)){
        document.getElementById("erroreEmail").innerHTML =  "Il il campo email non è valido"; 
        check = false;
      }
      if(genere == ""){
        document.getElementById("erroreGenere").innerHTML =  "Il campo genere non puo&#x0060 essere vuoto"; 
        check = false;
      }
      //Dato che questi due campi sono facoltativi quindi se sono vuoti non vengono controllati
      if(hobby.length > 0){
        if(!validateNumberText(hobby,1,500)){
          document.getElementById("erroreHobby").innerHTML =  "Il campo hobby non è valido"; 
          check = false;
        }
      }
      if(professione.length > 0){
        if(!validateNumberText(professione,1,500)){
          window.alert(professione.length);
          document.getElementById("erroreProfessione").innerHTML =  "Il campo professione non è valido"; 
          check = false;
        }
      }
      //Se il ceck è true passo avanti altrimenti rimango fermo in attesa di effetture di nuovo il controllo
      if(check){
        document.getElementById("myForm").submit();
      }

    }
	
    //Funzione che resetta il form
    function resetForm(){
      document.getElementById("myForm").reset();
    }

    
    //Controllo istantaneo del riempimento dei campi, se è corretto il colore del testo rimane nero altrimenti diventa rosso

    function stringControl(string,characterMin,characterMax){
      var stringa = document.getElementById(string).value;
      if(validateString(stringa,characterMin,characterMax)){
        document.getElementById(string).style.color = "#000000";
      }else{
        document.getElementById(string).style.color = "#ff0000";
      }
    }

    function stringTextNumber(string,characterMin,characterMax){
      var stringa = document.getElementById(string).value;
      if(validateNumberText(stringa,characterMin,characterMax)){
        document.getElementById(string).style.color = "#000000";
      }else{
        document.getElementById(string).style.color = "#ff0000";
      }
    }

    function numberControl(string,characterMin,characterMax){
      var numero = document.getElementById(string).value;
      if(validateNumber(numero,characterMin,characterMax)){
        document.getElementById(string).style.color = "#000000";
      }else{
        document.getElementById(string).style.color = "#ff0000";
      }
    }

    function phoneControl(string,characterMin,characterMax){
      var numero = document.getElementById(string).value;
      if(validatePhone(numero,characterMin,characterMax)){
        document.getElementById(string).style.color = "#000000";
      }else{
        document.getElementById(string).style.color = "#ff0000";
      }
    }

    function controlEmail(){
      var email = document.getElementById("email").value;
      if(validateEmail(email)){
        document.getElementById("email").style.color = "#ff0000";
      }else{
        document.getElementById("email").style.color = "#000000";
      }
    }

    //Funzioni base che servono per la convalidazione dei campi
    function validateEmail(email){
      let emailRegex = "[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}";
      if(!email.match(emailRegex)){
        return true;
      }else{
        return false;
      }
    }


    function validateString(string,characterMin,characterMax){
        var reg = /^[a-zèéëàáäìíòöóüùú\s]+$/i;
      if(string.length >= characterMin && string.length <= characterMax){ 
        if(!reg.test(string)){
          return false;
        }else{
          return true;
        }
      }else{
        return false;
      }
    }

    function validateNumberText(string,characterMin,characterMax){
      var reg = /^[0-9a-z]+$/i;
      if(string.length >= characterMin && string.length <= characterMax){ 
        if(!reg.test(string)){
          return false;
        }else{
          return true;
        }
      }else{
        return false;
      }
    }

    function validateNumber(numero, numMax, numMin){
      var reg = /^[0-9]+$/i;
      if(numero.length >= numMax && numero.length <= numMin){
        if(!reg.test(numero)){
          return false;
        }else{
          return true;
        }
      }else{
        return false;
      }
    }

    function validatePhone(numero){
      var reg = /^[0-9\s+#]+$/i;
      if(numero.length >= 9 && numero.length <= 30){
        if(!reg.test(numero)){
          return false;
        }else{
          return true;
        }
      }else{
        return false;
      }
    }
