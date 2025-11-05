let currentModeElement = document.getElementsByName("currentMode");

function redirect(url){
    window.location = url;
}

let mathDiv = document.querySelector("#mathDiv");
let geographyDiv = document.querySelector("#geographyDiv");
let programmingDiv = document.querySelector("#programmingDiv");
let randomDiv = document.querySelector("#randomDiv");

mathDiv.addEventListener("click", function test(){
    window.location = "math-quiz.php?currentMode=" + encodeURIComponent(currentModeElement[0].value);
});

geographyDiv.addEventListener("click", function test(){
    window.location = "geography-quiz.php?currentMode=" + encodeURIComponent(currentModeElement[0].value);
});

programmingDiv.addEventListener("click", function test(){
    window.location = "programming-quiz.php?currentMode=" + encodeURIComponent(currentModeElement[0].value);
});

randomDiv.addEventListener("click", function test(){
    window.location = "quiz.php?currentMode=" + encodeURIComponent(currentModeElement[0].value) + "&category=random";
});