<?php
/*****************************************************************************
    Datei:  sidebar.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   27.10.2017

    Die seitliche Navigationsleiste der OWASP Top Ten Projektseite.
 *****************************************************************************/
 ?>
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i>x</i>
  </a>
  <h4 class="w3-bar-item"><b>Menü</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="../templates/a1-template.php">Nummer 1 SQL-Injektion</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="../templates/a2-template.php">Nummer 2 Broken Authentication</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 3 Sensitive Data Exposure</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 4 XML External Entity (XXE)</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 5 Broken Access Control</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 6 Security Misconfiguration</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 7 Cross-Site Scripting (XSS)</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 8 Insecure Deserialization</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 9 Using Components with known Vulnerabilities</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Nummer 10 Insufficient Logging &amp; Monitoring</a>
</nav>

<!-- Überlagerungs Effekt, wenn die Sidebar auf kleinen Bildschirmen geöffnet wird. -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
