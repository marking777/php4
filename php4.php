<?php
//opdracht1
for($i = 0; $i <= 50; $i++){
    echo $i."<br>";
}

//opdracht2
$klasgenoten = array("Marouane",
"Marouane1","Marouane2","Marouane3"
,"Marouane4","Marouane5","Marouane6",
"Marouane7","Marouane8","Marouane9");

foreach ($klasgenoten as $afdruken){
    echo $afdruken. '<br>';
}

// opdracht3 en 4
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

foreach ($maanden as $count => $maand) {
    echo 'Maand' . ($count + 1) . ' is ' . $maand . '<br>';

}
?>
