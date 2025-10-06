function redirect(url){
    window.location = url;
}

let mathDiv = document.querySelector("#mathDiv");
let geographyDiv = document.querySelector("#geographyDiv");
let programmingDiv = document.querySelector("#programmingDiv");

mathDiv.addEventListener("click", function test(){
    window.location = "math-quiz.php";
});

geographyDiv.addEventListener("click", function test(){
    window.location = "geography-quiz.php";
});

programmingDiv.addEventListener("click", function test(){
    window.location = "programming-quiz.php";
});