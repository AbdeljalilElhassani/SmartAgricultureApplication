<?php
session_start();
if ($_SESSION['id'] == 1) {


    include('header.php')
?>


    <button onclick="DarkMode2()" id="darkLightModeSwitch" class="darkModeButton">

    </button>
    <div class="logo" id="logo">
    </div>
    <!--
<meter value="50" min="0" max="100" class="Meter "></meter>
<meter value="50" min="0" max="100" class="Meter airTempMeter"></meter>
<meter value="50" min="0" max="100" class="Meter airHumMeter"></meter>
<meter value="50" min="0" max="100" class="Meter soilTempMeter"></meter>
<meter value="50" min="0" max="100" class="Meter soilHumMeter"></meter>
<meter value="50" min="0" max="100" class="Meter soilPhMeter"></meter>

 -->
    <div class="environStates">
        <div class="environStateSection1">
            <div class="gauge" id="Co2">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover" id="gaugeCover"></div>
                </div>
                <h6 style="text-align: center;">CO2</h6>

            </div>
            <div class="gauge" id="AirTemp">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover" id="gaugeCover1"></div>
                </div>
                <h6 style="text-align: center;">Air Temperature</h6>

            </div>
            <div class="gauge" id="AirHumidity">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover" id="gaugeCover2"></div>
                </div>
                <h6 style="text-align: center;">Air Humidity</h6>

            </div>

        </div>
        <div class="environStateSection2">

            <div class="gauge" id="SoilTemp">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover" id="gaugeCover3"></div>
                </div>
                <h6 style="text-align: center;">Soil Temperature</h6>

            </div>
            <div class="gauge" id="SoilHumidity">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover" id="gaugeCover4"></div>
                </div>
                <h6 style="text-align: center;">Soil Humidity</h6>

            </div>
            <div class="gauge" id="SoilPH">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover" id="gaugeCover5"></div>
                </div>
                <h6 style="text-align: center;">Soil PH</h6>

            </div>
        </div>
    </div>

    <button onclick="terminateSession()" id="terminateSession" class="terminsateSessionBtn"></button>
    <h5 id="plantAndPrediction" class="text1">Plant and Prediction</h5>
    <button onclick="goToPrediction()" id="goToPrediction" class="goToPrediction"></button>






<?php
    include('footer.php');
    echo '<script type="text/javascript">',
    'setGaugeValue(co2Element, 0.4);',
    'setGaugeValue(airTempElement, 0.2);',
    'setGaugeValue(airHumidityElement, 0.3);',
    'setGaugeValue(soilTempElement, 0.1);',
    'setGaugeValue(soilHumidityElement, 0.02);',
    'setGaugeValue(soilPHElement, 0);',
    '</script>';
} else {
    echo "sorry you have no access !! ";
}
?>