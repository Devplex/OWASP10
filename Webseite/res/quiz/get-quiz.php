<?php
/*****************************************************************************
    Datei:  get-qiuz.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   04.12.2017

    Serverskript welches die Quiz-JSON-Dateien ausliefert.
 *****************************************************************************/

$file = $_GET["quiz"] . ".json";

if(file_exists($file)) {
  header('Content-Type: application/json');
  echo file_get_contents($file);
  exit();
} else {
  header('HTTP/1.0 404 Not Found');
  echo "<h1>Error 404 Not Found</h1>";
  echo "Die Seite, welche du angefordert hast, konnte nicht gefunden werden.";
  exit();
}

?>
