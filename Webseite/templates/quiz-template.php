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
          <h3 id="Question"></h3>
        </header>
        <div id="answerContainer" class="w3-container w3-padding-64">
        </div>
        <div id="quizCardFooter" class="w3-container w3-grey">
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
