/********* Javascript Generated with phpChart **********/ 
<?php
include_once("../Air_Quality/AirQualityQuery.php");
$ppmval = AirQuality::getAirQuality();
for($i=0;$i<count($ppmval);$i++){
?>

<?php $aq = $ppmval[$i]->getPPM(); ?>
<?php $ut = $ppmval[$i]->getUTime(); ?>

<?php
$sensorval1 = array( 
    array("y" => $aq, "label" => "" )
);
?>
<?php } ?>