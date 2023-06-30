<?php
	$Humidity=$_POST["Humidity"];
    $allStats = explode(" ",$Humidity);

	$Write="<?php $" . "Humidity='" . $allStats[0] . "'; " . "echo $" . "Humidity;" . " ?>";
	file_put_contents('HumidityContainer.php',$Write);
    $TempCelsius=$_POST["TempCelsius"];
	$Write1="<?php $" . "TempCelsius='" . $allStats[1] . "'; " . "echo $" . "TempCelsius;" . " ?>";
	file_put_contents('TemperatureCelsiusContainer.php',$Write1);
    $TempFarenheit=$_POST["TempFarenheit"];
	$Write2="<?php $" . "TempFarenheit='" . $allStats[2] . "'; " . "echo $" . "TempFarenheit;" . " ?>";
	file_put_contents('TemperatureFarenheitContainer.php',$Write2);
    $HeatIndexF=$_POST["HeatIndexF"];
	$Write3="<?php $" . "HeatIndexF='" . $allStats[3] . "'; " . "echo $" . "HeatIndexF;" . " ?>";
	file_put_contents('HeatIndexCContainer.php',$Write3);
    $HeatIndexC=$_POST["HeatIndexC"];
	$Write4="<?php $" . "HeatIndexC='" . $allStats[4] . "'; " . "echo $" . "HeatIndexC;" . " ?>";
	file_put_contents('HeatIndexFContainer.php',$Write4);
    
	//file_put_contents('DataContainer.php',$Write);
    
?>