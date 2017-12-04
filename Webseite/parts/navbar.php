<?php
/*****************************************************************************
    Datei:  navbar.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   27.10.2017

    Die obere Navigationsleiste der OWASP Top Ten Projektseite.
 *****************************************************************************/
 ?>
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <!-- Ab dem siebten Element muss w3-hide-medium angeben werden, damit die links bei kleineren Bildschirmen ausgeblendet werden. -->
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i>Menü</i></a>
    <a href="../templates/start.php" class="w3-bar-item w3-button w3-theme-l1"><img src="../res/img/owasp-logo-small.png" alt="Logo" height="24" width="24"></a>
    <a href="../templates/about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Über OWASP</a>
    <a href="../templates/project-staff.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Projektmitglieder</a>
  </div>
</div>
