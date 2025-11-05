currentModeElement = document.getElementsByName("currentMode");

function changeMode(mode){
    console.log(mode);

    let modeSwitch = document.getElementById("modeSwitch");

    if (mode == "light"){
        modePath.setAttribute('d', 'M12 5V3m0 18v-2M7.05 7.05 5.636 5.636m12.728 12.728L16.95 16.95M5 12H3m18 0h-2M7.05 16.95l-1.414 1.414M18.364 5.636 16.95 7.05M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z');
        modeSwitch.style.fill = "rgb(0,0,0)";
        modeSwitch.style.color = "rgb(0,0,0)";
        document.documentElement.style.setProperty('--bg-color', 'rgb(255,255,255)');
        document.documentElement.style.setProperty('--hoverable-bg-color', 'rgb(255, 255, 255)');
        document.documentElement.style.setProperty('--hoverable-hover-bg-color', 'rgb(232,232, 232, 0.92)');
        document.documentElement.style.setProperty('--hoverable-border-color', 'rgb(200, 200, 200)');
        document.documentElement.style.setProperty('--primary-color', 'rgba(130, 145, 255, 1)');
        document.documentElement.style.setProperty('--secondary-color', 'rgba(237, 72, 168, 1)');
        document.documentElement.style.setProperty('--h1-color', 'rgb(50,50,56)');
        document.documentElement.style.setProperty('--h2-color', 'rgb(46,46,46)');
        document.documentElement.style.setProperty('--h3-color', 'rgb(46,46,46)');
        document.documentElement.style.setProperty('--p-color', 'rgb(46,46,46)');
        document.documentElement.style.setProperty('--li-color', 'rgb(72,72,78)');
        document.documentElement.style.setProperty('--card-span-bg', 'rgb(245,245,245)');
        document.documentElement.style.setProperty('--card-span-border-color', 'rgb(215,215,215)');

    } else{
        modePath.setAttribute('d', 'M12 21a9 9 0 0 1-.5-17.986V3c-.354.966-.5 1.911-.5 3a9 9 0 0 0 9 9c.239 0 .254.018.488 0A9.004 9.004 0 0 1 12 21Z');
        modeSwitch.style.fill = "rgb(255,255,255)";
        modeSwitch.style.color = "rgb(255,255,255)";
        document.documentElement.style.setProperty('--bg-color', 'rgb(24,24,24)');
        document.documentElement.style.setProperty('--hoverable-bg-color', 'rgb(32,32,32)');
        document.documentElement.style.setProperty('--hoverable-hover-bg-color', 'rgb(28,28, 28, .95)');
        document.documentElement.style.setProperty('--hoverable-border-color', 'rgb(66,66,66)');
        document.documentElement.style.setProperty('--primary-color', 'rgb(130, 255, 153)');
        document.documentElement.style.setProperty('--secondary-color', 'rgb(168, 72, 237)');
        document.documentElement.style.setProperty('--h1-color', 'rgb(235,235,235)');
        document.documentElement.style.setProperty('--h2-color', 'rgb(215,215,215)');
        document.documentElement.style.setProperty('--h3-color', 'rgb(225,225,225)');
        document.documentElement.style.setProperty('--p-color', 'rgb(215,215,215)');
        document.documentElement.style.setProperty('--li-color', 'rgb(185,185,185)');
        document.documentElement.style.setProperty('--card-span-bg', 'rgb(42,42,42)');
        document.documentElement.style.setProperty('--card-span-border-color', 'rgb(65,65,65)');
    }
}

function changeIcon() {
    const modeIcon = document.getElementById('modeIcon');
    const modePath = document.getElementById('modePath');

    const currentMode = currentModeElement[0].value;

    if (currentMode === 'dark') {
        currentModeElement[0].value = "light";
        
        modeIcon.classList.remove('dark:text-white');
        modeIcon.classList.add('text-gray-800');
        document.body.classList.remove('dark');
        document.body.classList.add('light');
        localStorage.setItem('theme', 'light');
        changeMode("light");
    } else {
        currentModeElement[0].value = "dark";
        modeIcon.classList.remove('text-gray-800');
        modeIcon.classList.add('dark:text-white');
        document.body.classList.remove('light');
        document.body.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        changeMode("dark");
    }
}

let aHome = document.querySelector("#a-home");

aHome.addEventListener("click", function test(){
    window.location = "home.php?currentMode=" + encodeURIComponent(currentModeElement[0].value);
});