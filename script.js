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

function changeMode(mode){
    if (mode == "light"){
        document.documentElement.style.setProperty('--primary-color', 'rgba(130, 145, 255, 1)');
        document.documentElement.style.setProperty('--secondary-color', 'rgba(237, 72, 168, 1)');
        document.documentElement.style.setProperty('--bg-color', 'rgb(255,255,255)');
        document.documentElement.style.setProperty('--hoverable-bg-color', 'rgb(240, 240, 240)');
        document.documentElement.style.setProperty('--hoverable-border-color', 'rgb(200, 200, 200)');
    } else{
        document.documentElement.style.setProperty('--primary-color', 'rgb(130, 255, 153)');
        document.documentElement.style.setProperty('--secondary-color', 'rgb(168, 72, 237)');
        document.documentElement.style.setProperty('--bg-color', 'rgb(24,24,24)');
        document.documentElement.style.setProperty('--hoverable-bg-color', 'rgb(32,32,32)');
        document.documentElement.style.setProperty('--hoverable-border-color', 'rgb(66,66,66)');
    }
}

function changeIcon() {
    const modeIcon = document.getElementById('modeIcon');
    const modePath = document.getElementById('modePath');
    
    // Check localStorage for stored theme preference
    const currentMode = localStorage.getItem('theme') || 'light';

    if (currentMode === 'dark') {
        // Change icon to light mode (sun rays icon)
        modePath.setAttribute('d', 'M12 5V3m0 18v-2M7.05 7.05 5.636 5.636m12.728 12.728L16.95 16.95M5 12H3m18 0h-2M7.05 16.95l-1.414 1.414M18.364 5.636 16.95 7.05M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z');
        modeIcon.classList.remove('dark:text-white');
        modeIcon.classList.add('text-gray-800');
        document.body.classList.remove('dark');
        document.body.classList.add('light');
        localStorage.setItem('theme', 'light');
        changeMode("light");
    } else {
        // Change icon to dark mode (new moon/sun-like icon)
        modePath.setAttribute('d', 'M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z');
        modeIcon.classList.remove('text-gray-800');
        modeIcon.classList.add('dark:text-white');
        document.body.classList.remove('light');
        document.body.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        changeMode("dark");
    }
}