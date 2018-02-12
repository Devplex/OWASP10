<?php
/*****************************************************************************
    Datei:  a6-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A6 - Security Misconfiguration Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">
  <!-- Inhalt -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Security Misconfiguration</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>Sensible Daten in normalen Text gespeichert sind.</li>
        <li>Sensible Daten in normalen Text versendet werden.</li>
        <li>Sensible Daten eine schwache Verschlüsselung haben.</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Durch Überwachung einer Übertragung eines öffentlichen WLANs,
            können die Daten abgefangen werden. Danach können die Daten
            entschlüsselt, oder falls keine Verschlüsselung vorhanden ist,
            einfach ausgelesen werden.</li>
        <li>Person nutzt öffentlichen Computer und vergisst sich mit seinem
            Account abzumelden. Ohne eine Zeitüberschreitung der Session ID
            kann der nächste Nutzer durch einfaches betreten der zuletzt
            besuchten Seiten Zugriff auf den Account bekommen</li>
      </ul>
      <h3>Wie es verhindert werden kann:</h3>
      <ul>
        <li>Sensible Daten sollen nicht unnötig gespeichert werden und so
            schnell wie möglich verworfen werden.</li>
        <li>Starke Algorithmen und Schlüssel verwenden und ordnungsgemäße
            Schlüsselverwaltung vorhanden.</li>
        <li>Autovervollständigung in Formularen mit sensiblen Daten
            deaktivieren.</li>
        <li>Passwortmaske</li>
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
        <source src="../res/videos/A6-Security Misconfiguration.mp4" type="video/mp4">
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
        onclick="location.href='../templates/quiz-template.php?quiz=quiz-test'">
        Quiz starten!</button>
    </div>
  </div>
  <!-- Footer -->
  <?php include '../parts/footer.php'; ?>
</div>
