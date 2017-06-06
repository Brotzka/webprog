<?php
if(isset($_GET) && !empty($_GET)){

  echo "<pre>" . print_r($_GET) . "</pre>";

  foreach($_GET as $key => $value){
    echo "Schlüssel: $key | Wert: $value<br>";
  }

  for($x = 1; $x <= count($_GET); $x++){
    echo $_GET[$x] . "<br>";
  }
}

 ?>

<!--
So kann man das ganze mit einer for-Schleife auslesen.
Man beachte, dass die input-Felder als Name Zahlen haben müssen
-->
<h3>Variante 1</h3>
<p>Input-Felder haben als name-Attribut eine Zahl => keine Fehlermeldung => mit for-Schleife möglich</p>
 <form method="get">
   Vorname:<input type="text" name="1"></br>
   Nachname:<input type="text" name="2"></br>
   Email:<input type="text" name="3"></br>
   <button type="submit">Senden</button>
 </form>

<!--
Hier kann man nur mit foreach-Schleife arbeiten.
Das liegt daran, dass hier als name-Attribut für die Inputfelder ein String angegeben ist
-->
<h3>Variante 2</h3>
<p>Input-Felder haben als name-Attribut sprechende Bezeichnungen => Fehlermeldung => keine for-Schleife möglich</p>
 <form method="get">
   Vorname:<input type="text" name="vorname"></br>
   Nachname:<input type="text" name="nachname"></br>
   Email:<input type="text" name="email"></br>
   <button type="submit">Senden</button>
 </form>
