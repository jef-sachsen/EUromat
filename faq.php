<?php 
isset($_GET['from']) ? $back = $_GET['from'] : $back = "index.php";
if($back != 'index.php' and substr($back, 0, 14) != 'multiplier.php' and substr($back, 0, 10) != 'result.php' and substr($back, 0, 12) != 'mahlowat.php'){
  $back = "index.php";
}

$answerstring = '';
if(isset($_POST['ans'])){
  $answerstring = $_POST['ans'];
}

$count = 'undefined';
if(isset($_POST['count'])){
  $count = $_POST['count'];
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>EUromat - FAQ</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta content="">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/jef.min.css" rel="stylesheet" media="screen">

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <script src="js/jquery-2.0.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mahlowat.js"></script>
  
  <div class="container mt-50">
    <div class="col-md-4 pull-right">
      <a href="https://jef-sachsen.de/euromat">
        <img id="logo" class="img-responsive" src="img/euromat.png" title="Euromat Logo"/>
      </a>
    </div>
    <div class="col-md-12">

      <h1>FAQ</h1>

      <h4>Wer macht den EUromaten?</h4>
      <p>Der EUromat ist ein Angebot der Jungen Europäischen Förderalisten Sachsen zur Bundestagswahl 2017.</p>
      <h4>Wer hat die Thesen erarbeitet?</h4>
      <p>Die Thesen wurden von den Mitgliedern der Jungen Europäischen Förderalisten Sachsen erarbeitet.</p>

      <h4>Wo kommen die Positionen der Gruppen her?</h4>
      <p>Den an der Wahl teilnehmenden Parteien wurden die Thesen mit der Bitte um Stellungnahme weitergeleitet. Neben ihrer reinen Positionierung (also Zustimmung, Neutral, Ablehnung oder Keine Stellungnahme) konnten sie ihre Position auch in einem kurzen Absatz erläutern. Diese Stellungnahmen findet werden auf der Ergebnis-Seite angezeigt.</p>
      <p>Für ihre Stellungnahmen zu den Thesen sind die Parteien selbst verantwortlich.</p>

      <h4>Von welcher Wahl reden wir hier überhaupt?</h4>
      <p>Hier dreht sich alles um <a href="https://de.wikipedia.org/wiki/Bundestagswahl_2017">die Bundestagswahl 2017</a>.</p>

      <h4>Wer hat das hier programmiert?</h4>
      <p>Der <a href="http://hszemi.de" title="hszemi.de" target="_blank">Sven</a>, weil der das kann. Die EDVler von der JEF Sachsen haben noch ein paar Sachen verändert und verbessert. Zum Beispiel könnt ihr den EUromat nun auch schön auf euren Handys verwenden.</p>

      <h4>Funktioniert das hier wie der "echte" Wahl-O-Mat der bpb?</h4>
      <p>Es wurde versucht, die Punkteberechnung so wie beim "echten" Wahl-O-Mat zu gestalten.</p>

      <h4>Wie werden die Punkte berechnet?</h4>
      <p>Die Antworten der Testperson (das bist Du) werden mit den vorgegebenen Antworten der Gruppen abgeglichen.</p>
      <ul>
        <li>Stimmt die Antwort überein, werden der Gruppe 2 Punkte gutgeschrieben.</li>
        <li>Weicht die Antwort leicht ab (Zustimmung/Neutral oder Neutral/Ablehnung), wird der Gruppe 1 Punkt gutgeschrieben.</li>
        <li>Sind die Antworten entgegengesetzt oder hat eine Gruppe eine Frage nicht beantwortet, gibt es keine Punkte für die Gruppe.</li>
      </ul>
      <p>Eine Frage, die die Testperson übersprungen hat, wird nicht gewertet. Entsprechend gibt es dann insgesamt weniger Punkte zu erreichen.</p>
      <p>Eine Frage, die doppelt gewichtet werden soll, wird doppelt gewichtet, das heißt, für sie wird die doppelte Punktzahl gutgeschrieben (0/2/4). Entsprechend gibt es insgesamt mehr Punkte zu erreichen.</p>

      <div id='log'>
        <h4>Werden meine Antworten gespeichert?</h4>
        <p>Vor der Auswertung wirst Du gefragt, ob wir Deine Antworten speichern dürfen. Du kannst dann "Ja" auswählen, was bedeutet, dass wir Deine Antwortkombination zusammen mit einer ID speichern, die aus Deiner IP-Adresse und einem täglich wechselnden zufälligen Wert errechnet wird. Bereits am nächsten Tag kann Dein Eintrag auf keinen Fall mehr einer konkreten IP-Adresse zugeordnet werden. Wenn Du "Nein" auswählst, wird lediglich ein Zähler um 1 erhöht.</p>

        <h4>Ich möchte gar nicht gezählt werden!</h4>
        <p>Unser Webserver legt bei jedem Seitenaufruf einen Log-Eintrag an, der unter anderem einen Zeitstempel, Deine IP-Adresse und die aufgerufene URL enthält. Es wäre also unaufrichtig, dir vorzumachen, dass Dein Aufruf des EUromat nicht gezählt wird. Der EUromat wurde jedoch so konzipiert, dass aus den Server-Logdateien nicht ersichtlich ist, welche Antworten Du ausgewählt hast. Dies sehen wir tatsächlich nur, wenn Du dem am Ende explizit zustimmst.</p>
      </div>

      <h4>Ich habe einen Fehler gefunden!</h4>
      <p>Dann solltest Du das <a href="mailto:edv@jef-sachsen.de">an uns</a> melden. Wir freuen uns über sachdienliche Hinweise.</p>

      <a class="btn btn-primary" href="<?php echo $back; ?>"
        onclick="callPage(event, '<?php echo $back; ?>')" title="Zurück zum
        EUromat">Zurück zum EUromat</a>
      </div>
    </div>


    <script type="text/javascript">
      $( document ).ready( function(){
        if(window.location.hash == '#log'){
          setTimeout(function() {
            $('#log').css("background-color","#ffff55");
          }, 1000);
        }
      } );

      function callPage(evt, action){
        evt.preventDefault();
        var html = "<input name='ans' value='<?php echo $answerstring;?>'/><input name='count' value='<?php echo $count; ?>'/>";
        $('<form style="display: none;" method="post"/>').attr('action', action).html(html).appendTo('body').submit();
      }
    </script>


  </body>
  </html>
