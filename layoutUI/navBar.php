<?php

function createNavBar(){
    echo "<nav id='navWrap'>";
        echo "<div class='mobileNavBlock'><i class='material-icons' style='font-size:10vh;justify-content:left;color:white;padding-top:10px;' onclick='mobileNavHome()'>home</i></div>";
        echo "<div class='mobileNavBlock'><i class='material-icons' style='font-size:10vh;justify-content:left;color:white;padding-top:10px;' onclick='mobileNavMenu()'>menu</i></div>";
        echo "<div class='navBlock'>Home</div>";
        echo "<div class='navBlock'>About</div>";
        echo "<div class='navBlock'>Contact</div>";
        echo "<div class='navBlock'>Portfolio</div>";
        echo "<div class='navBlock'>Login</div>";
    echo "</nav>";
}



?>