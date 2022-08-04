var Dark = 0;
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