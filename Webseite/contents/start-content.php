<?php
/*****************************************************************************
    Datei:  start-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   27.10.2017

    Der Inhaltsteil der Startseite der OWASP Top Ten Projektseite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Willkommen auf der OWASP Top Ten Projektseite</h1>
      <p>Auf dieser Webseite werden die OWASP Web Top 10 für das Jahr 2017 vorgestellt.
         Jeder Angriff wird genau beschrieben und erklärt.
         Zum Schluß eines Kapitels kann der Angriff praktisch ausprobiert werden und
         es wird gezeigt, wie die eigene Web Appliktion hinreichend gegen diesen abgehärtet werden kann.
         Somit sollte nach erarbeitung aller in der linken Navigationsleiste aufgelisteten
         Angriffe ein solides Verständnis eben jener Angriffe vorhanden sein.</p>
      <p>Direkt loslegen: <a href="../templates/a1-template.php">OWASP Nummer 1 - SQL Injektionen</a></p>
      <br><br>
      <h3>Mehr Infos zur Projekseite?</h3>
      <p><a href="../templates/about.php">Über OWASP</a></p>
      <p><a href="../templates/project-staff.php">Die Projektmitglieder</a></p>
      <br><br><br><br><br><br>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
