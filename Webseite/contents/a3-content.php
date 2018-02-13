
<?php
/*****************************************************************************
    Datei:  a3-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A3 - Sensitive Data Exposure Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">
  <!-- Inhalt -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Sensitive Data Exposure</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>Standardeinstellungen bei Erstellung von Servern oder ähnlichem
            genutzt werden und somit leicht herauszufinden sind.</li>
        <li>Die Software die benutzt wird nicht auf dem aktuellen Stand ist, da
            Lücken im Programm gefunden worden sind und durch ein Update
            geschlossen werden sollten.</li>
        <li>Man zu bequem ist, Einstellungen zu überprüfen oder
            einzurichten.</li>
        <li>Relevante Informationen bei Warnmeldungen oder als Infomeldungen
            auftauchen.</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Fehler im Programmcode können großen Schaden verursachen;
            Fehler können ausversehen oder absichtlich
            (Hintertür in Komponenten) sein.</li>
        <li>Daten auslesen, welche in Fehler-, Warn,- oder Infomeldungen
            eingetragen sind.</li>
        <li>Einloggen mit Standardpasswörtern bei Server Konten</li>
        <li>Einen Port welcher als Standard offen gelassen wird um Zugriff für
            bestimmte Funktionen zu gewähren wird genutzt um Zugriff zu
            erhalten.</li>
      </ul>
      <h3>Wie verhindert man Attacke auf verwundbare Stellen der/des
          Software/Betriebssystems</h3>
      <ul>
        <li>Regelmäßige Überprüfungen der Software, ist Sie aktuell? Nein, also
            Updaten. Ist sie relevant? Nein, also entfernen.</li>
        <li>Standardeinstellungen bei Benutzerkonten und Passwörtern
            vermeiden.</li>
        <li>Benötigt diese Software Zugriffsrechte für das gesamte System oder
            können diese eingeschränkt werden? Wenn nein, Verwendung von
            getrennter bzw. segmentierter Anwendungsarchitekur um
            Zugriffsmöglichkeiten einzuschränken.</li>
        <li>Ein aufwendiger,doch relativ sicherer Schutz ist es, eine konstante
          Überwachung des Systems bzw. der Konfigurationen vorzunehmen und somit
          nicht gewünschtes Verhalten erkennen und isolieren zu können.</li>
      </ul>
      <h3>Ziele eines Angreifers (Umgebung und Nutzen)</h3>
      <ul>
        <li>Der Angreifer möchte Zugriff auf das Opfersystem erhalten. Daten
            stehlen oder manipulieren und somit Schaden anrichten bzw. einen
            Nutzen zu ziehen.</li>
        <li>Die Umgebung welche angegriffen wird, sind Schwachstellen bei
            Programmen, Einstellungen welche Lücken hervorrufen und der Nutzer
            selbst, welcher aufgrund von Unwissenheit oder Unbedachtheit
            Einstellungen vorgenommen hat, welche der Systemsicherheit
            Schaden.</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <ul>
        <li>Jeder Nutzer der ein System mit Internetzugang besitzt.</li>
        <li>Nutzer die keine Softwareupdates ausführen.</li>
        <li>Nutzer die sich auf Standardeinstellungen verlassen bzw.
            Standardpasswörter bei Konten verwenden.</li>
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
        <source src="../res/videos/A3-Sensitive Data Exposure.mp4" type="video/mp4">
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
        onclick="location.href='../templates/quiz-template.php?quiz=a3-test'">
        Quiz starten!</button>
    </div>
  </div>
  <!-- Footer -->
  <?php include '../parts/footer.php'; ?>
</div>
