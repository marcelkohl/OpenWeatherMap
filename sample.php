<?php
	require_once('Weather.class.php');

	$weather = new Weather();

	$weather->latitude = "-26.984500";
	$weather->longitude = "-48.631668";
	$weather->unit = "C"; // units can be: "F" for Fahrenheit, "C" for Celsius, "K" for Kelvin
	$weather->apiKey = "api-code-here";


	if ($weather->loadWeather() == true){
		echo 'weather now is: <br />';
		echo $weather->general.'<br />';
		echo '('.$weather->detailed.')<br />';
		echo '<img src="http://openweathermap.org/img/w/'.$weather->icon.'.png"><br />';
		echo $weather->temperature.' '.$weather->unit.' <br /> ';
		echo 'min.:'.$weather->temp_min.' / max.:'.$weather->temp_min.'<br />';
		echo 'pressure: '.$weather->pressure.' hpa<br /> ';
		echo 'humidity: '.$weather->humidity.'% <br /> ';
	}
?>
