<?php
/*****************************************************************************
    Datei:  a7-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A7 - Crosside-Scripting (XSS) Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">
  <!-- Inhalt -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Crosside-Scripting (XSS)</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>Eine Website die Eingaben seiner Textfelder interpretiert</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Datendiebstahl:</li>
        <ul>
          <li>Finden einer XSS Lücke durch Eingabe von HTML Anweisungen</li>
          <ul>
            <li>Wenn die Anweisung ausgeführt wird Lücke gegeben</li>
          </ul>
          <li>Seite mit eigenen Skripten innerhalb der Website erstellen,
              welche einer Anmeldeseite nachempfunden ist.</li>
          <li>An potentielle Opfer die URL zur bösartigen Seite schicken.</li>
          <ul>
            <li>Unter dem Vorwand, dass das Opfer sich einloggen müsse um ein
                Problem mit seinem Konto zu lösen.</li>
          </ul>
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
        <source src="../res/videos/A7-Cross-Site Scripting.mp4" type="video/mp4">
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
        onclick="location.href='../templates/quiz-template.php?quiz=a7-test'">
        Quiz starten!</button>
    </div>
  </div>
  <!-- Footer -->
  <?php include '../parts/footer.php'; ?>
</div>
