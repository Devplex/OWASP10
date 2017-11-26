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
      <h3>Ziel</h3>
      <p>Unautorisierte Manipulationen und Zugriffe auf systeminterne
         Datenbanken.</p>
      <h3>Umgebung</h3>
      <p>Websites mit Datenbank Systemen wie:</p>
      <ul>
        <li>SQL</li>
        <li>LDAP</li>
        <li>XPath</li>
        <li>NoSQL</li>
        <li>Betriebssystembefehlen</li>
        <li>XML</li>
        <li>SMTP-Headern</li>
      </ul>
      <h3>Umsetzung</h3>
      <p>Benutzereingaben, welche an die Datenbank gekoppelt sind und die
         Benutzereingaben unvalidert interpretieren, realisieren eine
         Injection.</p>
      <h3>Konkretes Beispiel</h3>
      <p>Angenommen Paypal nutzt SQL als Datenbankverwaltung.
    	   Das Paypal-Website-Suchfeld gibt eine Exception zurück sofern man ein
         ";" (Semikolon) eingibt. Somit ist nun klar, dass die Möglichkeit
         besteht, konkrete SQL Befehle über das Suchfeld einzugeben.
    	   Nun wäre es möglich durch diverse SQL Befehle unbemerkt Umbuchungen
         vom Vermögen diverser Paypal Anwender zum gunsten des Angreifers zu
         Manipulieren. (Überweisung von fremd Guthaben auf das eigene Paypal
         Konto)</p>
      <h3>Schutz</h3>
      <p>Benutzereingaben darf grundsätzlich nicht vertraut werden und somit
         dürfen diese niemals interpretierbar sein. Sie bedürfen einer
         Validierung.</p>
      <h3>Unterschied zu XSS</h3>
      <p>Bei der Injection hat das Opfer (Paypal-Benutzer) nur eine passive
         Rolle. Bei XSS ist es dem Benutzer noch möglich einem Angriff zu
         entgehen indem er rechtzeitig bemerkt, dass die URL bösartig ist,
         somit ist er aktiv involviert.</p>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
