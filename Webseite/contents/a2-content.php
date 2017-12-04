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
      <h3>Ziel</h3>
      <p>Erfassung oder Umgehung von Authentifizierungsmethoden zum Schutz vor
         unberechtigtem Zugriff ermöglichen.</p>
      <h3>Umgebung</h3>
      <p>Websites</p>
      <h3>Angriffszenarios</h3>
      <ul>
        <li>Man in the Middle Attack</li>
    	  <li>Textdaten vom Server stehlen</li>
      </ul>
      <h3>Schutz</h3>
      <ul>
        <li>nur starke Passwörter erlauben.</li>
    	  <li>Session ID sollte nach einer bestimmten Zeit oder nach logout
            ungültig werden.</li>
        <li>Daten sollten neben der Verschlüsselung zusätzlich gehasht
            werden.</li>
    	  <li>sensible Daten sollten im Body part einer POST Anfrage gesendet
            werden.</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <p>Jede Person mit einem Online Account jeglicher Art.</p>
      <h3>Merkmale</h3>
      <ul>
        <li><b>Unencrypted connections</b> Jeder kann Datenübertragung einsehen
            zwischen User und Webappaplikation durch bspw. Man in the
            Middle.</li>
        <li><b>Predictable Login Credentials</b> Usernames und Passwörter die
            leicht zu erraten oder oft benutzt werden, sodass ein Angreifer
            unautorisierten Zugriff hat.</li>
        <li><b>Session ID</b> Value hat keinen Timeout oder wird nicht ungültig
            gemacht nach einem logout. Wenn jemand eine Session ID bekommt kann
            er ohne Logindaten Zugriff bekommen -> zurück Button im
            Browser.</li>
        <li>Authentifizierungsdaten werden beim Speichern nicht geschützt,
            Daten sind im einfachen Text einsehbar.</li>
        <li><b>Session IDs werden im URL benutzt</b> Session ID value wird im
            URL String übertragen und sichtbar gemacht
            z.B. <i>http://bank.com/login.jsp?sessionid=abcd</i></li>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
