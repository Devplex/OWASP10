<?php
/*****************************************************************************
    Datei:  a7-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A7 - Security Misconfiguration Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Security Misconfiguration</h1>
      <h3>Ziel des Angreifers</h3>
      <p>Ausnutzen von Fehlern, Faulheit und Unwissenheit um Schaden
         anzurichten, Zugriff zu erhalten oder Manipulationen ausführen
         zu können.</p>
      <h3>Schutzmaßnahmen</h3>
      <ul>
        <li>Keine Standardeinstellungen bei Konten bzw. für Passwörter
            nutzen</li>
        <li>Keine veraltete Software verwenden – Immer Updaten/Patchen</li>
        <li>Keinerlei unnötige Funktionen oder Software nutzen</li>
        <li>Konstante bzw. automatisiert Überprüfungen der Einstellungen und
            Konfigurationen</li>
        <li>Getrennte bzw. Segmentierte Anwendungsarchitektur</li>
      </ul>
      <h3>Angriffszenarios</h3>
      <ul>
        <li>Nutzung von Standardkonten</li>
        <li>Ausnutzen einer Sicherheitslücke, welche vom Nutzer nicht geupdatet
            wurde</li>
        <li>Standardkonfiguration welche bekannte Lücken hat</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <p>Jeder der Internetzugang besitzt oder einen Computer besitzt</p>
      <h3>Umgebung</h3>
      <p>Jede Umgebung in der Einstellungen vorgenommen werden die der
         Sicherheit dienen, den Zugriff erlauben oder in irgendeine andere
         Weise eine Kommunikation stattfindet.</p>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
