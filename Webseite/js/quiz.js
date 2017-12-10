/*****************************************************************************
    Datei:  quiz.js
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   08.12.2017

    JavaScript für das Quiz.
 *****************************************************************************/
var quizObject = null; // die geparste JSON wird hier als globales Objekt gespeichert
var quizCounter = 0; // globale Variable welche sich 'merkt' welche Frage gerade bearbeitet wird
var answerArray = null; // Array mit den Antworten des Benutzers

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
  buildQuizCard();
  prepareNextQuestion();
  console.log("Quiz bereit!");
}

/* prepareNextQuestion
* Bereitet die Quizkarte für die nächste Frage vor.
* Ist keine Frage mehr vorhanden, wird das Quiz beendet.
*/
function prepareNextQuestion() {
  if(isQuizOver()) {
    return;
  }
  document.getElementById("Question").innerHTML = quizObject.questions[quizCounter].question;
  var answerRadButtons = document.getElementsByName("answer");
  for(var i = 0; i < answerRadButtons.length; i++) {
    answerRadButtons[i].checked = false;
    answerRadButtons[i].nextSibling.textContent = " "
                          + quizObject.questions[quizCounter].answers[i].answer;
    answerRadButtons[i].value = quizObject.questions[quizCounter].answers[i].correct;
  }
  answerRadButtons[0].checked = true;

}

/* checkAnswerAndPrepareNextQuestion
* Überprüft die Antwort des Nutzers und bereitet die nächste Frage vor.
*/
function checkAnswerAndPrepareNextQuestion() {
  checkAnswer();
  quizCounter++;
  prepareNextQuestion();
}

/* isQuizOver
* Überprüft ob noch Fragen vorhanden sind. Wenn nicht wird das Quiz beendet.
* Rückgabe: true  - wenn es keine Fragen mehr gibt.
*           false - wenn es noch Fragen gibt.
*/
function isQuizOver() {
  if(quizCounter >= quizObject.questions.length) {
    endQuiz();
    return true;
  }
  return false;
}

/* getCheckedRadButton
* Liefert den ausgewählten Radio Button zurück.
* undefined wenn keiner ausgewählt wurde.
*/
function getCheckedRadButton() {
  var answerRadButtons = document.getElementsByName("answer");
  for(var i = 0; i < answerRadButtons.length; i++) {
    if(answerRadButtons[i].checked) {
      return answerRadButtons[i];
    }
  }
  return undefined;
}

/* checkAnswer
* Wertet die Antwort aus und speichert diese in einem Array.
*/
function checkAnswer() {
  var checkedButton = getCheckedRadButton();
  var answer = {
    question: "",
    answer: "",
    correct: undefined
  };
  if(checkedButton != undefined) {
    answer.question = quizObject.questions[quizCounter].question;
    answer.answer = checkedButton.nextSibling.textContent;
    if(checkedButton.value == "1") {
      answer.correct = true;
    } else {
      answer.correct = false;
    }
  }
  answerArray.push(answer);
}

/* endQuiz
* Überschreibt die Quizkarte mit neuem Inhalt.
* Gibt eine erste Auswertung des Quiz aus.
* Bietet weitere Möglichkeiten von hier aus weiter zu machen.
*/
function endQuiz() {
  if(answerArray.length == 0) {
    document.getElementById("Question").innerHTML = "QUIZ unberarbeitet!";
    return;
  }
  buildEndQuizCard();
}

/* getAvgCorrectAnswers
* Bildet den durchschnitt aus richtig beantworteten Fragen.
*/
function getAvgCorrectAnswers() {
  var rightAnswerCounter = 0;
  for(var i = 0; i < answerArray.length; i++) {
    if(answerArray[i].correct) {
      rightAnswerCounter++;
    }
  }
  var avgCorrectAnswers = 0.0;
  avgCorrectAnswers = rightAnswerCounter / quizObject.questions.length
  avgCorrectAnswers *= 100;
  return avgCorrectAnswers.toFixed(0);
}

/* buildEndQuizCard
* Erstellt den Inhaltsteil der Quizkarte, wenn das Quiz beendet ist.
*/
function buildEndQuizCard() {
  // Quizkarte Header
  document.getElementById("Question").innerHTML = "Quiz beendet!";

  // Quizkarte Inhalt
  var evaluation = document.createElement("h4");
  evaluation.innerHTML = getAvgCorrectAnswers() + "% der Fragen waren richtig beantwortet!";
  clearContainer("answerContainer");
  var answerContainer = document.getElementById("answerContainer");
  answerContainer.style = "text-align:center;";
  answerContainer.appendChild(evaluation);

  // Quizkarte Footer
  buildEndQuizCardFooter();
}

/* buildEndQuizCardFooter
* Erstellt den Footer der Quizkarte, wenn das Quiz beendet ist.
*/
function buildEndQuizCardFooter() {
  clearContainer("quizCardFooter");
  var retryButton = document.createElement("button");
  retryButton.onclick = function() { prepareQuiz(quizObject); };
  retryButton.innerHTML = "Nochmal!";
  retryButton.classList.add('w3-button');
  retryButton.className += ' w3-left';
  retryButton.className += ' w3-teal';
  retryButton.style = "margin-top:10px;margin-bottom:10px;";
  var surveyButton = document.createElement("button");
  surveyButton.onclick = function() { createQuizSurvey(); };
  surveyButton.innerHTML = "Quiz Auswertung";
  surveyButton.classList.add('w3-button');
  surveyButton.className += ' w3-right';
  surveyButton.className += ' w3-teal';
  surveyButton.style = "margin-top:10px;margin-bottom:10px;";
  var quizCardFooter = document.getElementById("quizCardFooter");
  quizCardFooter.appendChild(retryButton);
  quizCardFooter.appendChild(surveyButton);
}

/* buildAnswerRadButton
* Erstellt einen Radio Button zum auswählen der Antwort.
*/
function buildAnswerRadButton() {
  var radButton = document.createElement("input");
  radButton.type = "radio";
  radButton.name = "answer";
  radButton.value = "0";
  return radButton;
}

/* buildQuizCard
* Erstellt die Quizkarte wenn das Quiz gestartet wurde.
*/
function buildQuizCard() {
  clearContainer("answerContainer");
  var answerContainer = document.getElementById("answerContainer");
  answerContainer.style = "text-align:left;";
  answerContainer.appendChild(buildAnswerRadButton());
  answerContainer.appendChild(document.createTextNode(" ich"));
  answerContainer.appendChild(document.createElement("br"));
  answerContainer.appendChild(buildAnswerRadButton());
  answerContainer.appendChild(document.createTextNode(" hasse"));
  answerContainer.appendChild(document.createElement("br"));
  answerContainer.appendChild(buildAnswerRadButton());
  answerContainer.appendChild(document.createTextNode(" javascript"));
  answerContainer.appendChild(document.createElement("br"));
  buildQuizCardFooter();
}

/* buildQuizCard
* Erstellt den Footer für die reguläre Quizkarte.
*/
function buildQuizCardFooter() {
  clearContainer("quizCardFooter");
  var nextButton = document.createElement("button");
  nextButton.onclick = function() { checkAnswerAndPrepareNextQuestion(); };
  nextButton.innerHTML = "Nächste Frage";
  nextButton.classList.add('w3-button');
  nextButton.className += ' w3-left';
  nextButton.className += ' w3-teal';
  nextButton.style = "margin-top:10px;margin-bottom:10px;";
  var numofQuestions = document.createElement("p");
  numofQuestions.onclick = function() { createQuizSurvey(); };
  numofQuestions.innerHTML = "Fragen insgesamt: " + quizObject.questions.length;
  numofQuestions.style = "color:white;text-align:right;";
  var quizCardFooter = document.getElementById("quizCardFooter");
  quizCardFooter.appendChild(nextButton);
  quizCardFooter.appendChild(numofQuestions);
}

/* getQuiz
* Lädt die JSON mit den Fragen vom Server.
*/
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

/* clearContainer
* Leert den Inhalt eines Containers.
*/
function clearContainer(id) {
  var div = document.getElementById(id);
  while(div.firstChild){
    div.removeChild(div.firstChild);
  }
}

/* createQuizSurvey
* Erstellt die Auswertung eines ganzen Quiz.
*/
function createQuizSurvey() {
  document.getElementById("Question").innerHTML = "Quiz Auswertung";

  clearContainer("answerContainer");
  var answerContainer = document.getElementById("answerContainer");
  answerContainer.style = "text-align:left;";

  for(var i = 0; i < answerArray.length; i++) {
    answerContainer.appendChild(createEvaluationOfAnswer(answerArray[i]));
    answerContainer.appendChild(document.createElement('hr'));
  }

  var evaluation = document.createElement("h4");
  evaluation.innerHTML = getAvgCorrectAnswers() + "% der Fragen waren richtig beantwortet!";
  answerContainer.appendChild(evaluation);
}

/* createEvaluationOfAnswer
* Erstellt die Auswertung einer Antwort des Benutzers.
*/
function createEvaluationOfAnswer(answerObject) {
  var heading = document.createElement('h3');
  heading.innerHTML = answerObject.question;
  var answer = document.createElement('p');
  answer.innerHTML = answerObject.answer;
  if(answerObject.correct) {
    answer.style="color:green;";
  } else {
    answer.style="color:red;"
  }
  var evalContainer = document.createElement('div');
  evalContainer.appendChild(heading);
  evalContainer.appendChild(answer);
  return evalContainer;
}
