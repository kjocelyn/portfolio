function checkAnswers() {
    var correctAnswers = 0;
    var quizForm = document.forms[0];
    var answerOne = quizForm["question-1-answers"].value;
    var answerTwo = quizForm["question-2-answers"].value;
    var answerThree = quizForm["question-3-answers"].value;
    var answerFour = quizForm["question-4-answers"].value;
    var answerFive = quizForm["question-5-answers"].value;

    if (answerOne === "B") {
        correctAnswers++;
    }
    if (answerTwo === "B") {
        correctAnswers++;
    }
    if (answerThree === "A") {
        correctAnswers++;
    }
    if (answerFour === "B") {
        correctAnswers++;
    }
    if (answerFive === "B") {
        correctAnswers++;
    }
    var p = document.getElementById('results');
    p.innerText = `${correctAnswers} / 5 Correct Answers`;
}