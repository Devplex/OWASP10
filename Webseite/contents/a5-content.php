<?php
/*****************************************************************************
    Datei:  a5-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A5 - Broken-Access-Control Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">
  <!-- Inhalt -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Broken Access Control</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>nicht geprüft wird, ob alle Daten- und Funktionsreferenzen
            angemessene Verteidigungsmechanismen haben. D.h. wird überprüft,
            ob ein bestimmter Nutzer für den Zugriff auf bestimmte Daten oder
            Funktionen autorisiert ist.</li>
        <li>ein System zulässt, dass Zugriffskontroll-Überprüfungen umgangen
            werden können, indem URL, interner App-Zustand oder die HTML-Seite
            modifiziert werden.</li>
        <li>ein System erlaubt, dass der Primärschlüssel zu dem Eintrag eines
            anderen Nutzers geändert wird, sodass der Account dieses Nutzers
            eingesehen und verändert werden kann.</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Angreifer kann mit einem SQL-Aufruf, bei dem auf
            Account-Informationen mit nicht verfizierten Daten zugegriffen wird,
            Zugriff auf jeden Account erhalten.</li>
        <li>Angreifer erhält durch Eingabe entsprechender URLs z.B. Zugriff auf
            Adminseite.</li>
      </ul>
      <h3>Wie verhindert man Attacke auf verwundbare Stellen der/des
          Software/Betriebssystems</h3>
      <ul>
        <li>Zugriffskontrolle nur in vertrauten, serverseitigen Code oder
            serverlosen API durchführen, wo der Angreifer nicht die
            Zugriffskontrollen-Überprüfungen oder Metadaten modifizieren
            kann.</li>
        <li>Einmaliges Implementieren der Zugriffskontroll-Mechanismen und
            Verwenden dieser in der gesamten Applikation.</li>
        <li>Zugriffskontrollen sollten die Eigentümer der Einträge prüfen,
            anstatt zu akzeptieren, dass der Nutzer jeden Eintrag erstellen,
            lesen, aktualisieren oder löschen kannt.</li>
        <li>Deaktivieren der Webserver-Verzeichnis-Auflistung und sicherstellen,
            dass sich Datei-Metadaten (z.B. .git) nicht innerhalb Webroots
            befinden.</li>
        <li>Loggen der Zugriffskontroll-Fehlschläge und Alarmieren der Admins
            wenn angemessen (z.B. bei wiederholten Fehlschlägen).</li>
      </ul>
      <h3>Ziele eines Angreifers (Umgebung und Nutzen)</h3>
      <ul>
        <li>unautorisierte Inhalte einsehen, verändern oder löschen.</li>
        <li>nicht autorisierte Funktionen ausführen.</li>
        <li>Administration der Seite übernehmen.</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <ul>
        <li>Unternehmen mit Web-Präsenz.</li>
        <li>Personen mit Web-Konten.</li>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>
  <!-- Video -->
  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3>Video zum Angriff</h3>
      <p>Super wichtig aussehender Text der richtig interessante Informationen.
        Beinhaltet die einen so richtig weiter bringen im Leben!</p>
      <video style="margin-left:auto;margin-right:auto;" width="320" height="240" controls>
        <source src="../res/videos/A5-Broken Access Control.mp4" type="video/mp4">
        Dein Browser unterstürtzt keine Videos!
      </video>
    </div>
  </div>
  <!-- Quiz -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3>Teste dich selbst!</h3>
      <p>Mit dem Quiz kannst du Testen ob du auch wirklich alles Verstanden
        hast!</p>
      <button class="w3-button w3-left w3-teal"
        onclick="location.href='../templates/quiz-template.php?quiz=a5-test'">
        Quiz starten!</button>
    </div>
  </div>
  <!-- Footer -->
  <?php include '../parts/footer.php'; ?>
</div>
