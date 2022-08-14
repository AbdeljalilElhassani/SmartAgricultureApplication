function addClassList(p1,p2){
  var x = document.getElementById(p1);
  x.classList.toggle(p2);
}
function myFunction(){
  addClassList("container","backgroundBlack");
  addClassList("logo","logoDark");
  addClassList("loginText","textWhite");
  addClassList("darkLightModeSwitch","lightModeButton");
}

function DarkMode2(){
  addClassList("container","backgroundBlack");
  addClassList("logo","logoDark");
  addClassList("darkLightModeSwitch","lightModeButton");
  addClassList("terminateSession","terminsateSessionBtnDark");
  addClassList("gaugeCover","gauge__cover__Dark");
  addClassList("gaugeCover1","gauge__cover__Dark");
  addClassList("gaugeCover2","gauge__cover__Dark");
  addClassList("gaugeCover3","gauge__cover__Dark");
  addClassList("gaugeCover4","gauge__cover__Dark");
  addClassList("gaugeCover5","gauge__cover__Dark");
  addClassList("Co2","gaugeDark");
  addClassList("AirTemp","gaugeDark");
  addClassList("AirHumidity","gaugeDark");
  addClassList("SoilTemp","gaugeDark");
  addClassList("SoilHumidity","gaugeDark");
  addClassList("SoilPH","gaugeDark");
  addClassList("plantAndPrediction","textWhite");
  addClassList("goToPrediction","goToPredictionDark");
}  
function DarkMode3(){
  addClassList("container","backgroundBlack");
  addClassList("logo","logoDark");
  addClassList("darkLightModeSwitch","lightModeButton");
  addClassList("terminateSession","terminsateSessionBtnDark");
  addClassList("plantAndPrediction","textWhite");
  addClassList("goToPrediction","goToPredictionDark");
  addClassList("predictionTextContainer","textWhite");
}  

   

function terminateSession(){
    window.location.replace("http://localhost/FatimaProject/terminate.php");

}
function goToPrediction(){
  window.location.replace("http://localhost/FatimaProject/prediction.php");

}
function goToEnvironement(){
  window.location.replace("http://localhost/FatimaProject/environState.php");

}

var co2Element = document.getElementById("Co2");
var airTempElement = document.getElementById("AirTemp");
var airHumidityElement = document.getElementById("AirHumidity");
var soilTempElement = document.getElementById("SoilTemp");
var soilHumidityElement = document.getElementById("SoilHumidity");
var soilPHElement = document.getElementById("SoilPH");


function setGaugeValue(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".gauge__fill").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".gauge__cover").textContent = `${Math.round(
    value * 100
  )}%`;
}






