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

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">XML External Entity (XXE)</h1>
      <h3>Ziel des Angreifers</h3>
      <ul>
        <li>Offenlegung vertraulicher Daten.</li>
        <li>Denial of Service</li>
        <li>Remote-Code-Ausführung</li>
      </ul>
      <h3>Schutzmaßnahmen</h3>
      <ul>
        <li>Bei sämtlichen XML-Parsern in der Applikation die Verarbeitung von
            externen XML-Entitäten und DTDs deaktivieren.</li>
        <li>Implementierung von Eingabevalidierungen oder Filterung um
            gefährliche Daten innerhalb XML-Dokumenten oder Headern zu
            verhindern.</li>
        <li>Verifizieren, dass XML- oder XSL-Datei-Upload-Funktionalität
            eingehende XML-Dateien mithilfe von XSD-Validierung validiert.</li>
        <li>Patchen oder Upgraden aller XML-Prozessoren und Bibliotheken, die
            von der Applikation genutzt werden oder auf dem zugrundeliegenden
            Betriebssystem. Die Nutzung von Dependency-Checkern ist entscheidend
            um das Risiko von notwendigen Bibliothken und Komponenten in einer
            Applikation managen zu können.</li>
        <li>Upgraden von SOAP auf die neueste Version.</li>
      </ul>
      <h3>Angriffszenarios</h3>
      <p>Upload einer schädlichen XML-Datei</p>
      <ul>
        <li>Angreifer versucht Daten vom Server zu extrahieren.</li>
        <li>Angreifer bringt etwas über das private Netzwerk des Servers in
            Erfahrung.</li>
        <li>Angreifer versucht einen Denial-of-Service-Angriff zu starten, indem
            er eine potenziell endlose Datei inkludiert</li>
      </ul>
      <h3>Gefährdete Personengruppen</h3>
      <p>Personen oder Unternehmen, die XML-basierte Webservices besitzen.</p>
      <h3>Umgebung</h3>
      <ul>
        <li>Applikationen und insbesondere XML-basierte Webservices, die XML
            direkt oder XML-Uploads akzeptieren; oder die nicht
            vertrauenswürdige Daten in XML-Dokumente einfügt, welche
            anschließend von einem XML-Prozessor geparst werden.</li>
        <li>Eine der XML-Prozessoren in der Applikation oder in den
            SOAP-basierten Webservices hat DTDs aktiviert.</li>
      </ul>
      <h3>Merkmal</h3>
      <p>Schwach konfiguerierter XML-Parser, der Spezifierung von externen
         Entitäten(eine URI, die während der XML-Verarbeitung dereferenziert
         und evaluiert wird) erlaubt.</p>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
