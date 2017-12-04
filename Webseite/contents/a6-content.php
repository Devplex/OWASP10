<?php
/*****************************************************************************
    Datei:  a6-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A6 - Sensitive Data Exposure Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Sensitive Data Exposure</h1>
      <h3>Ziel des Angreifers</h3>
      <p>Beschaffung von sensiblen Daten z.B. Passwörter, Kreditkarten Daten
         etc.</p>
      <h3>Schutzmaßnahmen</h3>
      <ul>
        <li>sensible Daten nicht unnötig speichern, so früh wie möglich
            verwerfen</li>
        <li>starke Algorithmen und Schlüssel verwenden und ordnungsgemäße
            Schlüsselverwaltung vorhanden</li>
        <li>Passwörter sollten mit einem speziell für den Passwortschutz
            entwickelten Algorithmus gespeichert werden</li>
        <li>Autovervollständigung in Formularen mit sensiblen Daten
            deaktivieren</li>
        <li>Zwischenspeicherung für Seiten mit vertraulichen Daten
            deaktivieren</li>
        <li>Passwortmaske</li>
      </ul>
      <h3>Angriffszenarios</h3>
      <ul>
        <li>Man in the Middle Attack</li>
        <li>Textdaten vom Server stehlen</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <p>Jede Person mit einem Online Account jeglicher Art</p>
      <h3>Umgebung</h3>
      <p>Webseiten</p>
      <h3>Merkmal</h3>
      <ul>
        <li>sensible Daten nicht verschlüsselt</li>
        <li>schwache Schlüsselerzeugung,-management</li>
        <li>schwache Algorithmen</li>
        <li>schwache Passwort hashing techniken</li>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
