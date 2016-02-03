<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\MainCapability;


class WeatherCapability extends MainCapability
{
    
    private $rainSensor;
   
    private $luxSensor;
    
    private $tempSensor;
    
    private $windOrientationSensor;
    
    private $windPowerSensor;
    
    private $hygroSensor;

}
