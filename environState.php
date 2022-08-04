<?php
    session_start();
    if(isset($_SESSION['id'])){

   
    include('header.php')
?>


<button onclick="DarkMode2()" id="darkLightModeSwitch" class="darkModeButton">

</button>
<div class="logo" id="logo">
</div>

<button onclick="terminateSession()" id="terminateSession" class="terminsateSessionBtn"></button>





<?php
    include('footer.php');
}
?>   