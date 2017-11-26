<?php
/*****************************************************************************
    Datei:  a9-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A9 - Using Components with Known Vulnerabilities
    Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Using Components with Known Vulnerabilities</h1>
      <h3>Leicht Verwundbar, wenn</h3>
        <p>Man die Schwachstellen der genutzten Komponenten nicht kennt (direkten oder indirekten).</p>
        <p>Die Software die benutzt wird nicht auf dem aktuellen Stand ist.<p>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Fehler im Programmcode können großen Schaden verursachen.
          Fehler können ausversehen oder absichtlich (Hintertür in Komponenten)
          sein.</li>
        <li>Beispiele für verwundbare Komponenten sind:</li>
          <ul>
            <li>CVE-2017-5638 Sicherheitsanfälligkeit für die
                Remotecodeausführung, die ermöglicht beliebigen Code auf dem
                Server auszuführen.</li>
            <li>Internet of Things(IoT) unterschiedlich dazu: fast unmöglich zu
                patchen.</li>
          </ul>
        <li>Es gibt automatisierte Tools, die Angreifern helfen unpatched
              oder falschkonfigurierte Systeme ausfindig zu machen</li>
      </ul>
      <h3>Wie verhindert man Attacke auf verwundbare Stellen der/des
            Software/Betriebssystems</h3>
      <ul>
        <li>Lösche ungenutzte Abhängigkeiten, unnötige Funktionen, Komponenten,
            Dateien und Dokumentationen.</li>
        <li>Prüfen der Versionen der serverseitigen und benutzerseitigen
            Komponenten und deren abhängigen Tools.</li>
        <li>Benutze nur Komponenten von offiziellen  Quellen und wenn möglich,
            signierte Pakete um die Chance zu reduzieren modifizierte,
            böswillige Komponenten zu bekommen.</li>
      </ul>
    <div class="w3-third w3-container">
      <img src="../res/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
