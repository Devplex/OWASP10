<?php
/*****************************************************************************
    Datei:  a4-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A4 - XML External Entity (XXE) Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">
  <!-- Inhalt -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">XML External Entity (XXE)</h1>
      <h3>Leicht verwundbar, wenn</h3>
      <ul>
        <li>ein XML-Parser die Spezifizierung von externen Entitäten (d.h. eine
            URI, die während der XML-Verarbeitung dereferenziert und evaluiert
            wird) erlaubt.</li>
        <li>eine Applikation XML direkt oder XML-Uploads akzeptiert,
            insbesondere von nicht vertrauenswürdigen Quellen, und diese
            XML-Dokumente anschließend von einem  XML-Parser parsen lässt</li>
        <li>eine der XML-Prozessoren in der Applikation oder in den
            SOAP-basierten Webservices DTDs aktiviert hat.</li>
      </ul>
      <h3>Beispiel Attacken</h3>
      <ul>
        <li>Upload einer schädlichen XML-Datei, mit der der Angreifer</li>
        <ul>
          <li>versucht, Daten vom Server zu extrahieren.</li>
          <li>etwas über das private Netzwerk des Servers in Erfahrung
              bringt.</li>
          <li>versucht, einen Denial-of-Service-Angriff zu starten, indem er
              eine potenziell endlose Datei inkludiert.</li>
        </ul>
      </ul>
      <h3>Wie verhindert man Attacke auf verwundbare Stellen der/des
          Software/Betriebssystems</h3>
      <ul>
        <li>Bei sämtlichen XML-Parsern in der Applikation die Verarbeitung von
            externen XML-Entitäten und DTDs deaktivieren</li>
        <li>Implementierung von Eingabevalidierungen oder Filterung, um
            gefährliche Daten innerhalb XML-Dokumenten oder Headern zu
            verhindern</li>
        <li>Verifizieren, dass XML- oder XSL-Datei-Upload-Funktionalität
            eingehende XML-Dateien mithilfe von XSD-Validierung validiert</li>
        <li>Patchen oder Upgraden aller XML-Prozessoren und Bibliotheken, die
            von der Applikation genutzt werden, oder auf dem zugrundeliegenden
            Betriebssystem. Die Nutzung von Dependency-Checkern ist
            entscheidend, um das Risiko von notwendigen Bibliotheken und
            Komponenten in einer Applikation managen zu können</li>
        <li>Upgraden von SOAP auf die neueste Version</li>
      </ul>
      <h3>Ziele eines Angreifers (Umgebung und Nutzen)</h3>
      <ul>
        <li>Offenlegung vertraulicher Daten.</li>
        <li>Denial of Servicet</li>
        <li>Remote-Code-Ausführung.</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <ul>
        <li>Nutzer, die keine Software-Updates ausführen.</li>
        <li>Personen oder Unternehmen, die XML-basierte Webservices
            besitzen.</li>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>
  <!-- Video -->
  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3>Video zum Angriff</h3>
      <p>Super wichtig aussehender Text der richtig interessante Informationen.
        Beinhaltet die einen so richtig weiter bringen im Leben!</p>
      <video style="margin-left:auto;margin-right:auto;" width="320" height="240" controls>
        <source src="../res/videos/A4-XML External Entities.mp4" type="video/mp4">
        Dein Browser unterstürtzt keine Videos!
      </video>
    </div>
  </div>
  <!-- Quiz -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3>Teste dich selbst!</h3>
      <p>Mit dem Quiz kannst du Testen ob du auch wirklich alles Verstanden
        hast!</p>
      <button class="w3-button w3-left w3-teal"
        onclick="location.href='../templates/quiz-template.php?quiz=quiz-test'">
        Quiz starten!</button>
    </div>
  </div>
  <!-- Footer -->
  <?php include '../parts/footer.php'; ?>
</div>
