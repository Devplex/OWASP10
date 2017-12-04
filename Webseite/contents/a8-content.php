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

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Insecure Deserialization</h1>
      <h3>Ziel des Angreifers</h3>
      <p>Serialisierte Objekte an das Opfer senden um Schaden anzurichten,
         Leitungen zu blockieren oder Zugriff zu erhalten
         (Remote-Code-Ausführung).</p>
      <h3>Schutzmaßnahmen</h3>
      <ul>
        <li>Serialisierte Objekte aus unbekannten Quellen verbieten.</li>
        <li>Integritätsprüfung</li>
        <li>Code isolieren und in niedrigen Berechtigungsebenen ausführen</li>
        <li>Auf Ausnahmen und Fehler prüfen: ist der Typ erwartet?
            Oder löst die Deserialisierung nicht erwartetes verhalten aus?</li>
        <li>Konstante Überwachung der Verbindung. Wird durch die
            Deserialisierung die Verbindung beeinträchtigt?</li>
      </ul>
      <h3>Angriffszenarios</h3>
      <p>Senden von Serialisierten Objekten</p>
      <h3>Gefährdete Personengruppen</h3>
      <p>Jeder der Daten die Serialisiert wurden um eine Übertragung zu
         erleichtern empfängt und diese dann Deserialisiert</p>
      <h3>Umgebung</h3>
      <ul>
        <li>Alle Anwendungen die einen Zustand speichern oder erhalten
            müssen.</li>
        <li>Anwendungen die Daten Empfangen oder eine Client-Server Architektur
            verwernden.</li>
      </ul>
      <h3>Merkmale</h3>
      <ul>
        <li>Nicht bekannte neue Nutzer.</li>
        <li>Unbekannte Anfragen bei der Übertragung von Daten.</li>
      </ul>
    </div>
    <div class="w3-third w3-container">
      <img src="../res/img/owasp-logo-negative.png" alt="OWASP Logo" height="40%" width="100%">
    </div>
  </div>

  <?php include '../parts/footer.php'; ?>

</div>
