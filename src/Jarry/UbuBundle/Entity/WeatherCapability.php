<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
/**
 * WeatherCapability
 */
class WeatherCapability extends Capability
{
    private $nameOfTable = 'log_weather';
    
    private $rainSensor;
    private $luxSensor;
    private $tempSensor;
    private $windOrientationSensor;
    private $windPowerSensor;
    private $hygroSensor;
}