[![Maintenance](https://img.shields.io/badge/Maintained%3F-no-red.svg)](https://bitbucket.org/lbesson/ansi-colors)
[![Generic badge](https://img.shields.io/badge/Status-Deprecated-orange.svg)](https://shields.io/)
[![GPLv3 license](https://img.shields.io/badge/License-GPLv3-blue.svg)](http://perso.crans.org/besson/LICENSE.html)
[![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://GitHub.com/Naereen/ama)

# OpenWeatherMap Sample Class

## What does it do?
This PHP class is an implementation of the [OpenWeatherMap API](https://openweathermap.org/api) for easy access to the requests of the API.

## How to use it?

```php
require_once('Weather.class.php');

$weather = new Weather();

$weather->latitude = "-26.984500";
$weather->longitude = "-48.631668";
$weather->unit = Weather::UNIT_CELCIUS;
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
```
