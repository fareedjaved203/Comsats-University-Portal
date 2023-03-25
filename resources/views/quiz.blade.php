<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <style>
      * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html{
        font-size: 62.5%;
      }
      .nav-item:hover {
        background-color: #64379f;
      }
      .navbar {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
      .nav-item {
        padding: 1.6rem;
        font-size: 1.9rem;
      }
      .navbar-brand {
        width: 50%;
      }
      .navbar-brand img {
        transform: scale(2.8);
        overflow: hidden;
      }
      .showcase {
        background-color: #64379f;
      }
      .showcase2 {
        background-color: white;
      }
      .img-section {
        max-width: 80% !important;
        position: absolute;
        top: 12%;
        left: 20%;
      }
      .player-holder {
        height: 250px;
        max-width: 550px;
        background: transparent;
        text-align: center;
      }
      .player-thumb {
        width: 220px;
        height: 220px;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 50%;
        background-image: url("{{ asset('student/' . $student->image) }}");
        background-size: cover;
        background-position: center;
      }
      .enrollBtn {
        transform: translateY(2);
        margin-top: 20px;
        font-size: 1.5rem;;
      }
      .welcome{
          font-size: 4rem !important;
        }
      @media (max-width: 992px) and (min-width: 768px) {
        .img-section {
          position: absolute;
          top: 15%;
        }
      }
      @media (max-width: 992px) {
        .navbar-brand {
          margin: 10px 0 10px 30px;
        }
        .navbar-brand img {
          transform: scale(5);
        }
      }
      @media (max-width: 768px) {
        .welcome{
          font-size: 2.8rem !important;
        }
        .img-section {
          max-width: 100% !important;
          position: absolute;
          left: 0;
        }
        .container2 {
          margin-top: 100px;
        }}
    </style>
    <script
      src="https://kit.fontawesome.com/8180d0ebda.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body id="home" class="d-flex flex-column min-vh-100">
    <nav
    class="navbar navbar-expand-lg navbar-dark"
    style="background-color: #27104e"
  >
    <div class="container">
      <a class="navbar-brand" href="{{ url('/home') }}">
        <img src="{{ asset('images/logo.png') }}" width="10%" alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style="font-size: 2rem !important;"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/aboutus') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div
  class="container-fluid showcase w-100 row"
  style="
    height: 180px;
    margin-right: 0 !important;
    margin-left: 0 !important;
  "
></div>
<div
  class="container-fluid showcase2 w-100 row"
  style="
    height: 100px;
    margin-right: 0 !important;
    margin-left: 0 !important;
  "
></div>
<div class="container img-section">
  <div class="row text-center">
    <div class="col-md-8">
      <p class="h1 mt-5 welcome" style="color: black;">
        Welcome, <span class="auto-type" style="color: black"></span>
        <div class="enrollBtn">
          <a href="url('/home/courses') }}" class="enrollCourse"><button class="btn btn-success" style="font-size: 2rem;">Enroll Course</button> </a>
        </div>
      </p>
    </div>
    <div class="col-md-4">
      <div class="player-holder">
        <div class="player-thumb"></div>
      </div>
    </div>
  </div>
</div>
    <div class="container2">
      <div id="loader"></div>
      <div id="game" class="justify-center2 flex-column2 hidden2">
        <div id="hud">
          <div id="hud-item">
            <p id="progressText" class="hud-prefix">Question</p>
            <div id="progressBar">
              <div id="progressBarFull"></div>
            </div>
          </div>
          <div id="hud-item">
            <p class="hud-prefix">Marks</p>
            <h1 class="hud-main-text" id="score">0</h1>
          </div>
        </div>
        <h2 id="question"></h2>
        <div class="choice-container">
          <p class="choice-prefix">A</p>
          <p class="choice-text" data-number="1"></p>
        </div>
        <div class="choice-container">
          <p class="choice-prefix">B</p>
          <p class="choice-text" data-number="2"></p>
        </div>
        <div class="choice-container">
          <p class="choice-prefix">C</p>
          <p class="choice-text" data-number="3"></p>
        </div>
        <div class="choice-container">
          <p class="choice-prefix">D</p>
          <p class="choice-text" data-number="4"></p>
        </div>
      </div>
    </div>
    <footer
        class="text-center text-white mt-auto"
        style="background-color: #27104e"
      >
        <div class="container">
          <!-- Section: Logo -->
          <section class="d-flex">
            <!-- Left -->
            <div class="me-4">
            <img src="{{ asset('images/logoo.png') }}" alt="" style="position: relative; width: 180px; height: 150"/>
            </div>
          </section>
          <section>
            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center">
              <!-- Grid column -->
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/home') }}" class="text-white"  style="font-size: 1.5rem; text-decoration:none;">Home</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/login') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" >Student</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/Teacherlogin') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" 
                    >Lecturer</a
                  >
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/aboutus') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" >About</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/contact') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" >Contact</a>
                </h6>
              </div>
            </div>
          </section>
          <hr class="my-5" />

          <!-- >>>>>>>>>------ Links ------<<<<<<<< -->
          <section>
            <center>
              <div class="col-sm-5 col-md-4 col-lg-3">
                <ul class="list-inline mt-5">
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.facebook.com/') }}" 
                      ><i 
                        class="fa fa-facebook social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.twitter.com/') }}"
                      ><i
                        class="fa fa-twitter social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('/https://www.linkedin.com/') }}"
                      ><i
                        class="fa fa-linkedin social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.telegram.com/') }}"
                      ><i
                        class="fa fa-envelope social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.github.com/') }}"
                      ><i
                        class="fa fa-github social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                </ul>
              </div>
            </center>
          </section>
        </div>
        <div
          class="text-center p-2"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          <p class="text-white" style="font-size: 1.5rem; text-decoration:none;">&copy; 2023. All Rights Reserved</p>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      let typed = new Typed(".auto-type", {
        strings: ["{{ $student->email }}", "{{ $student->name }}"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true,
      });
    </script>
    <script>
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
              if (c.indexOf(nameEQ) === 0)
                  return c.substring(nameEQ.length, c.length);
          }
          return null;
      }

      // Get the value of the cookie
      let course = getCookie("courseName");
      let link = undefined;
      switch (course) {
          case "General Knowledge":
              link =
                  "https://opentdb.com/api.php?amount=10&category=9&difficulty=easy&type=multiple";
              break;
          case "Geography":
              link =
                  "https://opentdb.com/api.php?amount=10&category=22&difficulty=hard&type=multiple";
              break;
          case "Science & Nature":
              link =
                  "https://opentdb.com/api.php?amount=10&category=17&difficulty=easy&type=multiple";
              break;
          case "Computers":
              link =
                  "https://opentdb.com/api.php?amount=10&category=18&difficulty=hard&type=multiple";
              break;
          case "Mathematics":
              link =
                  "https://opentdb.com/api.php?amount=10&category=19&difficulty=medium&type=multiple";
              break;
          case "History":
              link =
                  "https://opentdb.com/api.php?amount=10&category=23&difficulty=hard&type=multiple";
              break;
          case "Politics":
              link =
                  "https://opentdb.com/api.php?amount=10&category=24&difficulty=medium&type=multiple";
              break;
          case "Anime & Manga":
              link =
                  "https://opentdb.com/api.php?amount=10&category=31&difficulty=easy&type=multiple";
              break;
          case "Sports":
              link =
                  "https://opentdb.com/api.php?amount=10&category=21&difficulty=medium&type=multiple";
              break;
          case "Mythology":
              link =
                  "https://opentdb.com/api.php?amount=10&category=20&difficulty=hard&type=multiple";
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
      const MAX_QUESTIONS = 3;

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
              return window.location.assign(
                  "{{ url('/home/courseInfo/quizDashboard/quiz/thankResponse') }}"
              );
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
          
          function setCookie(name, value, minutes) {
            const expirationDate = new Date();
            expirationDate.setTime(
              expirationDate.getTime() + minutes * 60 * 1000
            );
            const expires =
            "expires=" + expirationDate.toUTCString();
            document.cookie =
            name + "=" + value + ";" + expires + ";path=/";
          }

        // Set the cookie
        setCookie("quizMarks", score, 10);
      };
      

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>
