const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text"));
const progressText = document.getElementById("progressText");
const scoreText = document.getElementById("score");
const progressBarFull = document.getElementById("progressBarFull");
const loader = document.getElementById("loader");
const game = document.getElementById("game");
let currentQuestion = {};
let acceptingAnswers = false;
let score = 0;
let questionCounter = 0;
let availableQuesions = [];

let questions = [];
//code to get cookie
function getCookie(name) {
  const nameEQ = name + "=";
  const ca = document.cookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

// Get the value of the cookie
let course = getCookie("courseName");
console.log(course);
let link = undefined;
switch (course) {
  case "General Knowledge":
    link =
      "https://opentdb.com/api.php?amount=50&category=9&difficulty=easy&type=multiple";
    break;
  case "Geography":
    link =
      "https://opentdb.com/api.php?amount=50&category=22&difficulty=hard&type=multiple";
    break;
  case "Science & Nature":
    link =
      "https://opentdb.com/api.php?amount=49&category=17&difficulty=easy&type=multiple";
    break;
  case "Computers":
    link =
      "https://opentdb.com/api.php?amount=34&category=18&difficulty=hard&type=multiple";
    break;
  case "Mathematics":
    link =
      "https://opentdb.com/api.php?amount=14&category=19&difficulty=medium&type=multiple";
    break;
  case "History":
    link =
      "https://opentdb.com/api.php?amount=50&category=23&difficulty=hard&type=multiple";
    break;
  case "Politics":
    link =
      "https://opentdb.com/api.php?amount=21&category=24&difficulty=medium&type=multiple";
    break;
  case "Anime & Manga":
    link =
      "https://opentdb.com/api.php?amount=40&category=31&difficulty=easy&type=multiple";
    break;
  case "Sports":
    link =
      "https://opentdb.com/api.php?amount=50&category=21&difficulty=medium&type=multiple";
    break;
  case "Mythology":
    link =
      "https://opentdb.com/api.php?amount=11&category=20&difficulty=hard&type=multiple";
    break;
  default:
    break;
}
fetch(link)
  .then((res) => {
    return res.json();
  })
  .then((loadedQuestions) => {
    //API is stored in questions variable
    questions = loadedQuestions.results.map((loadedQuestion) => {
      const formattedQuestion = {
        question: loadedQuestion.question,
      };

      const answerChoices = [...loadedQuestion.incorrect_answers];

      formattedQuestion.answer = Math.floor(Math.random() * 4) + 1;
      answerChoices.splice(
        formattedQuestion.answer - 1,
        0,
        loadedQuestion.correct_answer
      );

      answerChoices.forEach((choice, index) => {
        formattedQuestion["choice" + (index + 1)] = choice;
      });

      return formattedQuestion;
    });

    startGame();
  })
  .catch((err) => {
    console.error(err);
  });

//CONSTANTS
const CORRECT_BONUS = 1;
const MAX_QUESTIONS = 10;

startGame = () => {
  questionCounter = 0;
  score = 0;
  availableQuesions = [...questions];
  game.classList.remove("hidden2");
  loader.classList.add("hidden2");
  getNewQuestion();
};

getNewQuestion = () => {
  if (questionCounter >= MAX_QUESTIONS) {
    //go to the end page
    return window.location.assign("thankResponse.html");
  }
  questionCounter++;
  progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;
  //Update the progress bar
  progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

  const questionIndex = Math.floor(Math.random() * availableQuesions.length);
  currentQuestion = availableQuesions[questionIndex];
  question.innerText = currentQuestion.question;

  choices.forEach((choice) => {
    const number = choice.dataset["number"];
    choice.innerText = currentQuestion["choice" + number];
  });

  availableQuesions.splice(questionIndex, 1);
  acceptingAnswers = true;
};

choices.forEach((choice) => {
  choice.addEventListener("click", (e) => {
    if (!acceptingAnswers) return;

    acceptingAnswers = false;
    //selectedChoice stores the p tag with class choice-text
    const selectedChoice = e.target;
    //it stores the data-number of that p-tag
    const selectedAnswer = selectedChoice.dataset["number"];

    //storing as variable for the answer marked by the user as correct/incorrect
    const classToApply =
      selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

    //marks will be +1 if it is correct
    if (classToApply === "correct") {
      incrementScore(CORRECT_BONUS);
    }

    //this highlights (change bg) the div either red or green depending on the answer
    selectedChoice.parentElement.classList.add(classToApply);

    //the green/red highlight will disappear after 1 sec and a new question will be generated
    setTimeout(() => {
      selectedChoice.parentElement.classList.remove(classToApply);
      getNewQuestion();
    }, 1000);
  });
});

//this method increments the marks
incrementScore = (num) => {
  score += num;
  scoreText.innerText = score;
};
