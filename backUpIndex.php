<?php
	$Write="<?php $" . "Humidity=''; " . "echo $" . "Humidity;"." ?>";
	file_put_contents('HumidityContainer.php',$Write);
    $Write1="<?php $" . "TempCelsius=''; " . "echo $" . "TempCelsius;"." ?>";
	file_put_contents('TemperatureCelsiusContainer.php',$Write1);
    $Write2="<?php $" . "TempFarenheit=''; " . "echo $" . "TempFarenheit;"." ?>";
	file_put_contents('TemperatureFarenheitContainer.php',$Write2);
    $Write3="<?php $" . "HeatIndexF=''; " . "echo $" . "HeatIndexF;"." ?>";
	file_put_contents('HeatIndexCContainer.php',$Write3);
    $Write4="<?php $" . "HeatIndexC=''; " . "echo $" . "HeatIndexC;"." ?>";
	file_put_contents('HeatIndexFContainer.php',$Write4);
?>
<!DOCTYPE html>
<head>
    
</head>
<body>
    <div>Test</div>
</body>
<!DOCTYPE html>
<html lang = "en">
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
    html {
     font-family: Arial;
     display: inline-block;
     margin: 0px auto;
     text-align: center;
    }
    h2 { font-size: 3.0rem; }
    div { font-size: 3.0rem; }
    .units { font-size: 1.2rem; }
    .ds-labels{
      font-size: 1.5rem;
      vertical-align:middle;
      padding-bottom: 15px;
    }
  </style>
    <script src="jquery.min.js"></script>
    <script>
			$(document).ready(function(){
				 $("#Humidity").load("HumidityContainer.php");
				setInterval(function() {
					$("#Humidity").load("HumidityContainer.php");
				}, 500);
			});
            $(document).ready(function(){
				 $("#TemperatureC").load("TemperatureCelsiusContainer.php",);
				setInterval(function() {
					$("#TemperatureC").load("TemperatureCelsiusContainer.php");
				}, 500);
			});
            $(document).ready(function(){
				 $("#TemperatureF").load("TemperatureFarenheitContainer.php",);
				setInterval(function() {
					$("#TemperatureF").load("TemperatureFarenheitContainer.php");
				}, 500);
			});
            $(document).ready(function(){
				 $("#Heat_IndexC").load("HeatIndexCContainer.php",);
				setInterval(function() {
					$("#Heat_IndexC").load("HeatIndexCContainer.php");
				}, 500);
			});
            $(document).ready(function(){
				 $("#Heat_IndexF").load("HeatIndexFContainer.php",);
				setInterval(function() {
					$("#Heat_IndexF").load("HeatIndexFContainer.php");
				}, 500);
			});
	</script>
    </head>
    <body>
    
    
    <div>
    <i class="fas fa-duotone fa-droplet-percent"></i>
  
     <!-- <span class="ds-labels">Temperature Celsius</span> -->
    <span id="Humidity"></span>   
    <sup class="units"></sup>
    
    </div>
    <div>
    <i class="fas fa-thermometer-half" style="color:#059e8a;"></i> 
  
     <!-- <span class="ds-labels">Temperature Celsius</span> -->
    <span id="TemperatureC"></span>
    <sup class="units"></sup>
    
    </div>
    <div>
    <i class="fas fa-thermometer-half" style="color:#059e8a;"></i> 
  
     <!-- <span class="ds-labels">Temperature Celsius</span> -->
    <span id="TemperatureF"></span>
    <sup class="units"></sup>
    </div>
    <div>
    <i class="fas fa-solid fa-fire fa-beat" style="color: #621a0d;"></i>
    <span id="Heat_IndexC"></span>
    <sup class="units"></sup>
    </div>
    <!-- <p id="Heat_IndexC"></p> -->
    <div>
    <i class="fas fa-solid fa-fire fa-beat" style="color: #621a0d;"></i>
    <span id="Heat_IndexF"></span>
    <sup class="units"></sup>
        </div>

    <!-- <p id="Heat_IndexF"></p> -->
        
        </body>
    </html>

