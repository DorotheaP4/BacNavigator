AI QUIZZ:

- Parti componente:

Client - pagina web
 - codul este javascript
 - html cu boostrap (css), si jquery ca librarie de manipulare DOM
 - raspunsul de la server este interpretat JSON si aduce modificari interfetei
 - aplicatia se incarca complet, si necesita doar cereri catre server pentru AI
 - ocr-izare este facuta prin intermentul serviciului de OCR-izare de la google (vision.googleapis.com)
 - totul se intampla in browser pentru a minimiza timpii de raspuns
 - nu se stocheaza nimic pe server despre sesiunea userilor
 - function principala din cod este doaction care preia comenzile de pe butoane

    function doaction(act)
    {
      switch(act)
      {
        case 'start':
          $("div.ecran").hide();
          $("#start").show();
          break;
          ....
  - exemplu cod procesare raspuns de la AI cu quiz-ul:

            
          $("#quizzmesaj").hide();
          $("#question").text(d.intrebare);
          intrebari+=' '+d.intrebare;
          $("#answera").text('A: '+d.raspunsA);
          $("#answerb").text('B: '+d.raspunsB);
          $("#answerc").text('C: '+d.raspunsC);
          $("#answerd").text('D: '+d.raspunsD);
          $("#correct").text(d.correct);
          $(".okansw").hide();
          $("#divintrebare").show();
          lastquizz=d;
            

Server - procesare
- serverul este php
- cererile se preiau si se prelucreaza prin API extern de AI (googleapis)
- raspunsurile sunt JSON pentru o interpretare facila in javascript
- promptul de AI pentru creare quizz:

        ....
      $resp=sendToVertexAPI("Creaza o intreabare, raspunde in format JSON {intrebare, raspunsA,raspunsB,raspunsC,raspunsD,correct:A or B or C or D} din textul urmator: --- ".$_POST['txt']." ----"
        .($_POST['intrebari']!=""?"Evita sa pui urmatoarele intrebari: ".$_POST['intrebari']:""));
      $ret=extractJsonFromAi($resp);
         ....

- Pentru de AI pentru explicatii:

          ....
      $resp=sendToVertexAPI("De ce la intrabarea --- ".$_POST['intrebare']." ---"." Cu raspunsurile: "
        ." A:".$_POST['raspunsA']
        .", B:".$_POST['raspunsB']
        .", C:".$_POST['raspunsC']
        .", D:".$_POST['raspunsD']
        .", raspunsul corect este ".$_POST['correct']."? Raspunde in format JSON {explicatii}"
        ." Intrebare este extrasa din textul urmator: --- ".$_POST['txt']." ----");
        $ret=extractJsonFromAi($resp);
          ....
