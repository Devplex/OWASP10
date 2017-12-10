/*****************************************************************************
    Datei:  quiz.js
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   08.12.2017

    JavaScript für das Quiz.
 *****************************************************************************/
var quizObject = null;
var quizCounter = 0;
var answerArray = null;
var rightAnswerCounter = 0;

/* startQuiz
* Holt das Quiz.
*/
function startQuiz(quizName) {
  getQuiz(quizName);
}

/* prepareQuiz
* Überschreibt die globale Variable quizObject mit der geparsten Quiz JSON.
* Füllt die Quizkarte mit der ersten Frage und den zugehörigen Antworten.
*/
function prepareQuiz(quiz) {
  quizObject = quiz;
  quizCounter = 0;
  rightAnswerCounter = 0;
  answerArray = new Array();
  document.getElementById("numOfQ").innerHTML = "Fragen insgesamt: "
                                                  + quizObject.questions.length;
  nextQuestion();
  console.log("Quiz bereit!");
}

function nextQuestion() {
  if(quizCounter >= quizObject.questions.length) {
    endQuiz();
    return;
  }
  document.getElementById("Question").innerHTML = quizObject.questions[quizCounter].question;
  var answerRadButtons = document.getElementsByName("answer");
  for(var i = 0; i < answerRadButtons.length; i++) {
    answerRadButtons[i].nextSibling.textContent = " "
                          + quizObject.questions[quizCounter].answers[i].answer;
    answerRadButtons[i].value = quizObject.questions[quizCounter].answers[i].correct;
  }
  quizCounter++;
}

function getCheckedRadButton() {
  var answerRadButtons = document.getElementsByName("answer");
  for(var i = 0; i < answerRadButtons.length; i++) {
    if(answerRadButtons[i].checked) {
      return answerRadButtons[i];
    }
  }
  return undefined;
}

function endQuiz() {
  document.getElementById("quizCard").innerHTML = "QUIZ BEENDET!";
}

function getQuiz(quizName) {
  var request = new XMLHttpRequest();

  request.open("GET", "../res/quiz/get-quiz.php?quiz=" + quizName);
  request.addEventListener('load', function(event) {
    if (request.status >= 200 && request.status < 300) {
      console.log("Anfrage erfolgreich!");
      prepareQuiz(JSON.parse(request.responseText));
    } else {
      console.log("Anfrage fehlgeschlagen!");
    }
  });
  request.send();
}
