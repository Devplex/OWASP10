<?php
/*****************************************************************************
    Datei:  a8-content.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   26.11.2017

    Der Inhaltsteil für die A8 - Insecure Deserialization Steckbrief Seite.
 *****************************************************************************/
 ?>
<div class="w3-main" style="margin-left:250px">
  <!-- Inhalt -->
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Unsichere Deserialisierung</h1>
      <p>Serialisierung ist den Zustand eines Objektes vollständig in einen
         Bytestrom zu verwandeln um eine leichte bzw. um eine Übertragung zu
         ermöglichen.</p>
      <p>Deserialisierung ist der Vorgang aus dem Bytestrom (Bytes) wieder das
         Objekt zu erstellen</p>
      <h3>Leicht verwundbar, wenn</h3>
        <ul>
          <li>Daten ohne Überprüfung empfangen werden.</li>
          <li>Keine Abbruchkriterien beim Empfangen von Daten vorliegen.</li>
          <li>Daten die serialisiert werden, keine Einschränkung der
              Zugriffsrechte besitzen.</li>
        </ul>
        <h3>Beispiel Attacken „Deserialisierte Daten“</h3>
        <ul>
          <li>Serialisierung löst eine Aktion aus, die Schaden anrichtet.</li>
          <li>Serialisierung blockiert die Leitung und verhindert weiteren
              Zugriff.</li>
          <li>Serialisierung erlaubt Zugriff des Angreifers aufs Opfersystem und
              kann Daten auslesen oder erhält vollständigen Zugriff
              (Remote-Controll).</li>
        </ul>
        <h3>Wie verhindert man Attacke auf verwundbare Stellen der/des
             Software/Betriebssystems</h3>
         <ul>
           <li>Serialisierte Objekte aus unbekannten Quellen verbieten.</li>
           <li>Integritätsprüfungen bei den empfangenen Daten.</li>
           <li>Empfangenen Code bzw. Daten isolieren und in niedrigen
               Berechtigungsebenen ausführen. Beispiel Segmentierung durch
               Container.</li>
           <li>Prüfungen auf Ausnahmen und Fehler.</li>
           <li>Typ der empfangenen Daten überprüfen. Wurde dieser Typ überhaupt
               erwartet oder war es ein Angriff?</li>
           <li>Überwachung der Verbindung, wird die Leitung blockiert? Löst die
               Deserialisierung ein unerwartetes Verhalten aus? </li>
           <li>Abbruch der Verbindung, wenn eine Übertragung nach einer
               gewissen Zeit nicht beendet wird.</li>
         </ul>
         <h3>Ziele eines Angreifers (Umgebung und Nutzen)</h3>
         <ul>
           <li>Der Angreifer möchte Zugriff auf das Opfersystem erhalten. Daten
               stehlen oder manipulieren und somit Schaden anrichten bzw. einen
               Nutzen zu ziehen.</li>
           <li>Den Zugriff blockieren oder einschränke.</li>
           <li>Die Umgebungen welche angegriffen werden, sind alle bei denen
               Daten übertragen, empfangen oder ausgetauscht werden.</li>
           <li>Anwendungen, die einen Zustand speichern oder erhalten
               müssen.</li>
         </ul>
         <h3>Gefährdete Personengruppen</h3>
         <ul>
           <li>Jeder Nutzer der ein System mit Internetzugang besitzt und Daten
               empfängt.</li>
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
        <source src="../res/videos/A8-Insecure Deserialization.mp4" type="video/mp4">
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
