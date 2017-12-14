<?php
/*****************************************************************************
    Datei:  a1-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A1 - SQL Injektion Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">SQL Injektion</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>Eine Website die Eingaben seiner Textfelder interpretiert</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Zugriff auf die Datenbank einer Website:</li>
        <ul>
          <li>Manipulation von Daten</li>
          <li>Auslesen von Daten</li>
          <li>Sich selbst als jemand anderen ins System einloggen</li>
          <li>Administratoren aussperren durch das Ändern von Passwörtern</li>
        </ul>
      </ul>
      <h3>Wie verhindert man Attacke auf verwundbare Stellen der Website</h3>
      <ul>
        <li>Benutzereingaben werden validiert:</li>
        <ul>
          <li>Befehle erkennen und blockieren</li>
        </ul>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo"
           height="40%" width="100%">
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3>Video zum Angriff</h3>
      <p>Super wichtig aussehender Text der richtig interessante Informationen.
         Beinhaltet die einen so richtig weiter bringen im Leben!</p>
      <video style="margin-left:auto;margin-right:auto;" width="320" height="240" controls>
        <source src="../res/videos/test.mp4" type="video/mp4">
        Dein Browser Unterstürtzt keine Videos!
      </video>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3>Teste dich selbst!</h3>
      <p>Mit dem Quiz kannst du Teseten ob duch auch wirklich alles Verstanden
         hast!</p>
      <button class="w3-button w3-left w3-teal"
        onclick="location.href='../templates/quiz-template.php?quiz=quiz-test'">
        Quiz starten!</button>
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
