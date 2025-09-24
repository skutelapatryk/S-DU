function redirect(url){
    window.location = url;
}

let mathDiv = document.querySelector("#mathDiv");
let polishDiv = document.querySelector("#polishDiv");
let programmingDiv = document.querySelector("#programmingDiv");

mathDiv.addEventListener("click", function test(){
    window.location = "math-quiz.html";
});

polishDiv.addEventListener("click", function test(){
    window.location = "polish-quiz.html";
});

programmingDiv.addEventListener("click", function test(){
    window.location = "programming-quiz.html";
});