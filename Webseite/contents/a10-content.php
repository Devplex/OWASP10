<?php
/*****************************************************************************
    Datei:  a10-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A10 - Insufficient Logging & Monitoring Steckbrief
    Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Insufficient Logging &amp; Monitoring</h1>
      <h3>Unzureichende Protokollierung, Erkennung, Überwachung und aktive
         Reaktion tritt jeder Zeit auf</h3>
        <ul>
          <li>berprüfbare Ereignisse, wie Einloggen, fehlgeschlagene
              Einlogversuche und Werte Transaktionen werden nicht
              gespeichert.</li>
          <li>Protokolle von Anwendungen und APIs werden nicht auf Fehler
              überprüft.</li>
          <li>Alarmschwellen und Antworteskalationen wie das Risiko die Daten
              bei der Anwendung zu halten ist nicht effektiv</li>
        </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Eine Open-Source Projekt Forum Software, laufend bei einem kleinen
            Team, wird gehackt durch einen Fehler in seiner Software. Die
            Angreifer haben es geschafft den Foruminhalt und das
            Quellcode-Repository zu löschen. Es konnte wiederhergestellt werden,
            aber der Mangel an Überwachung, Protokollierung oder Alarmierung
            führte zu einer weitaus schlimmeren Verletzung. Das Software Forum
            Projekt ist dadurch nicht mehr aktiv</li>
        <li>Ein Angreifer benutzt für jeden bekannten Benutzer ein übliches
            Passwort. Er kann damit herausfinden, welcher Benutzer dieses
            Passwort benutzt. Bei allen anderen bleibt nur ein falscher
            Loginversuch. Nach ein paar Tagen wird es mit einem anderen
            Passwort wiederholt.</li>
      </ul>
      <h3>Wie es verhindert werden kann:</h3>
      <ul>
        <li>Gemäß dem Risiko der Datenspeicherung von der Anwendung:</li>
        <ul>
          <li>Alle Anmeldeversuche, Eingabefehler oder ähnliches sollten mit
              ausführlichen Benutzerdaten gespeichert werden und protokolliert
              werden, um ausführliche Analysen darüber zu erstellen.</li>
          <li>Transaktionen mit hohen Wert sollten einen Prüfpfad mit
              Integritätskontrollen aufweisen, um Manipulation oder
              Löschvorgänge zu verhindern.</li>
          <li>Wirksame Überwachung und Alarmierung sollten eingerichtet werden,
              damit verdächtige Aktivitäten innerhalb eine Zeitraumes erkannt
              werden.</li>
        </ul>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
