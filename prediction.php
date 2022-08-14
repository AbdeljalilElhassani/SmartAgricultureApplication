<?php
session_start();
if ($_SESSION['id'] == 1) {


    include('header.php')
?>


    <button onclick="DarkMode3()" id="darkLightModeSwitch" class="darkModeButton"></button>
    <div class="logo" id="logo"></div>
    <div class="imgContainer" id="imgContainer">
        <img src="./images/sickPlants/00a20f6f-e8bd-4453-9e25-36ea70feb626___RS_GLSp 4655_270deg.JPG" alt="PlantImage">
    </div>
    <div class="predictionTextContainer" id="predictionTextContainer">
        <h3 class="PredictionTitle">Prediction</h3>
        <h2 class="prediction">Sick</h2>
    </div>

    <button onclick="terminateSession()" id="terminateSession" class="terminsateSessionBtn2Move"></button>
    <h5 id="plantAndPrediction" class="text2">Environement State</h5>
    <button onclick="goToEnvironement()" id="goToPrediction" class="goToPrediction2Move"></button>


<?php
    include('footer.php');
} else {
    echo "sorry you have no access !! ";
}
?>