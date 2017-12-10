<?php
/*****************************************************************************
    Datei:  quiz-template.php
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   08.12.2017

    Template für die Quiz Seite.
 *****************************************************************************/
 ?>
<!DOCTYPE html>
<html>

<!-- Meta-Infos -->
<?php include '../parts/meta.php'; ?>

<body>

<!-- Navbar -->
<?php include '../parts/navbar.php'; ?>

<!-- Sidebar -->
<?php include '../parts/sidebar.php'; ?>

<!-- Content -->
<script type="text/javascript" src="../js/quiz.js"></script>
<div class="w3-main" style="margin-left:300px">
  <div class="w3-row w3-padding-64">
    <div class="w3-container w3-padding-64">
      <div id="quizCard" class="w3-card-4" style="width:70%">
        <header class="w3-container  w3-light-grey">
          <h3 id="Question">Ist das ein Cooles Quiz?</h3>
        </header>
        <div class="w3-container w3-padding-64">
          <input type="radio" name="answer" value="1"> Ja<br>
          <input type="radio" name="answer" value="2"> Oh Ja<br>
          <input type="radio" name="answer" value="3"> Verdammt nochmal, Ja
        </div>
        <div class="w3-container w3-grey">
          <br>
          <button onclick="nextQuestion()" class="w3-button w3-left w3-teal">
                                                          Nächste Frage</button>
          <p id="numOfQ" style="color:white; text-align:right">Fragen insgesamt: 1</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  // Quiz vorbereiten
  startQuiz("<?php echo $_GET["quiz"] ?>");
</script>

<!-- Script damit w3.css richtig funktioniert -->
<script type="text/javascript" src="../js/w3css-script.js"></script>

</body>

</html>
