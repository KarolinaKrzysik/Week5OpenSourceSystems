<?php
include("class_lib.php");
?>
<?php
    $stefan = new person("Stefan Mischook");
    
    $stefan -> set_name("Stefffan");
    echo "Stefan's full name: " . $stefan -> get_name() . "<br/>";
    $james = new employee("Johnny Fingers");
    echo "--> " . $james -> get_name();  
    
    $rebecca = new employee("Rebecca Jones");
    $rebecca -> set_name("Stefan Sucks");
    echo "<br/><br/>" . $rebecca ->get_name();
?>