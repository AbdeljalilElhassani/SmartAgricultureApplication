<?php
$co2 = $_GET['co2'];
$soilPH = $_GET['soilPH'];
$soilTemp = $_GET['soilT'];
$soilHumidity = $_GET['soilH'];
$airTemp = $_GET['airT'];
$airHumidity = $_GET['airH'];

function writeIntoFile($fileName, $Content)
{
    $myfile = fopen($fileName, "w") or die("Unable to open file!");
    fwrite($myfile, $Content);
    fclose($myfile);
}

writeIntoFile("CO2.txt", $co2);
writeIntoFile("soilPH.txt", $soilPH);
writeIntoFile("soilTemperature.txt", $soilTemp);
writeIntoFile("soilHumidity.txt", $soilHumidity);
writeIntoFile("airTemperature.txt", $airTemp);
writeIntoFile("airHumidity.txt", $airHumidity);
