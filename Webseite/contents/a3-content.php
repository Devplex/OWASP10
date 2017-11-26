<?php
/*****************************************************************************
    Datei:  a3-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A3 - Crosside-Scripting (XSS) Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Crosside-Scripting (XSS)</h1>
      <h3>Ziel</h3>
      <p>Dem Opfer intime Benutzerdaten entlocken oder ihn gezielt auf bösartige
         Webites umleiten.</p>
      <h3>Umgebung</h3>
      <p>Allgemein Websites mit Benutzereingabefeldern</p>
      <h3>Umsetzung</h3>
      <p>Einfügen von konkreten HTML Anweisungen innerhalb eines Suchtextfeldes
         auf einer Website mit der Sicherheitslücke. Dies führt dazu, dass die
         eingegebene HTML Anweisung interpretiert wird.<br><br>
    	   Aus der gegebenen Suchanfrage wird eine URL generiert, welche ggf. die
         eben eingefügten HTML Anweisung inkludiert. Nun kann diese an mögliche
         Opfer (z.B. via Phising) versendet werden.</p>
      <h3>Konkretes Beispiel</h3>
      <p>Angenommen Paypal besitzt eine Lücke, welche XSS erlaubt. Somit ist es
         als Angreifer möglich innerhalb der ligitimen Paypal Website eine HTML
         Anweisung zu schreiben und die daraus generierte URL an das Opfer zu
         versenden welche dem Opfer vorgaugelt er müsse bitte seine
         vertraulichen Zugangsdaten eingeben, welche wiederum vom Opfer
         unbemerkt an dritte weitergeleitet werden.<br><br>
    	   Desweiteren wäre es auch möglich statt gefälschter Eingabeformulare ein
         bösartiges Skript auszuführen oder durch &lt;Iframe> eine andere
         bösartige Website innerhalb der Paypal Website zu öffnen.</p>
      <h3>Schutz</h3>
      <p>Benutzereingaben darf grundsätzlich nicht vertraut werden und somit
         dürfen diese niemals interpretierbar sein. Sie bedürfen einer
         Validierung.</p>
      <h3>Unterschied Injection</h3>
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
