<?php
    session_start();
    if($_SESSION['id']==1){

   
    include('header.php')
?>


<button onclick="DarkMode2()" id="darkLightModeSwitch" class="darkModeButton">

</button>
<div class="logo" id="logo">
</div>

<meter value="50" min="0" max="100" class="Meter "></meter>
<meter value="50" min="0" max="100" class="Meter airTempMeter"></meter>
<meter value="50" min="0" max="100" class="Meter airHumMeter"></meter>
<meter value="50" min="0" max="100" class="Meter soilTempMeter"></meter>
<meter value="50" min="0" max="100" class="Meter soilHumMeter"></meter>
<meter value="50" min="0" max="100" class="Meter soilPhMeter"></meter>


<button onclick="terminateSession()" id="terminateSession" class="terminsateSessionBtn"></button>





<?php
    include('footer.php');
}else{
    echo "sorry you have no access !! ";
}
?>   