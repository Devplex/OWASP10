<?php
/*****************************************************************************
    Datei:  a2-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A2 - Broken Authentication & Session Managment
    Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Broken Authentication &amp; Session Managment</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>die Anmeldedaten beim Speichern unzureichend geschützt/verschlüsselt
            sind.</li>
        <li>die Anmeldedaten durch schwache Kontoverwaltungsfunktionen
            (Kontoerstellung, Kennwortänderung, etc.) leicht zu erraten oder zu
            überschreiben sind.</li>
        <li>die Session ID aus der URL auslesbar ist.</li>
        <li>Session IDs keine Zeitüberschreitung besitzen oder Benutzersitzungen
            nicht ungültig werden während der Abmeldung.</li>
        <li>Passwörter und Session IDs über unverschlüsselte Verbindungen
            gesendet werden.</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Bei unverschlüsselten Verbindungen kann jeder den Datentransfer
            beobachten und die Anmeldedaten abfangen z.B. durch Man in The
            Middle.</li>
        <li>Person nutzt öffentlichen Computer und vergisst sich mit seinem
            Account abzumelden. Ohne eine Zeitüberschreitung der Session ID
            kann der nächste Nutzer durch einfaches Betreten der zuletzt
            besuchten Seiten Zugriff auf den Account beschaffen. </li>
      </ul>
      <h3>Wie verhindert man Attacke auf verwundbare Stellen der Website</h3>
      <ul>
        <li>Nur starke Passwörter erlauben.</li>
        <li>Anmeldedaten sollten neben einer starken Verschlüsselung zusätzlich
            gehasht werden.</li>
        <li>Session IDs sollten eine Zeitüberschreitung besitzen.</li>
        <li>Sensible Daten sollten im Body Part einer POST Anfrage gesendet
            werden.</li>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
