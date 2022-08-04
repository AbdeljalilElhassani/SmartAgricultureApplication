function myFunction(){
    var container = document.getElementById("container");
    var logo = document.getElementById("logo");
    var loginText = document.getElementById("loginText");
    var darkLightModeSwitch = document.getElementById("darkLightModeSwitch");
    container.classList.toggle("backgroundBlack")
    logo.classList.toggle("logoDark");
    loginText.classList.toggle("textWhite")
    darkLightModeSwitch.classList.toggle("lightModeButton")
}

function DarkMode2(){
    var container = document.getElementById("container");
    var logo = document.getElementById("logo");
    var darkLightModeSwitch = document.getElementById("darkLightModeSwitch");
    var logOutBtn = document.getElementById("terminateSession")
    container.classList.toggle("backgroundBlack")
    logo.classList.toggle("logoDark");
    darkLightModeSwitch.classList.toggle("lightModeButton")
    logOutBtn.classList.toggle("terminsateSessionBtnDark")
}

function terminateSession(){
    window.location.replace("http://localhost/FatimaProject/terminate.php");

}