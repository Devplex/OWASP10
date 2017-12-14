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

  <?php include '../parts/footer.php'; ?>

</div>
