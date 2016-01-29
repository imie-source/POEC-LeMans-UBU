<?php

namespace Jarry\UbuBundle\Entity\Capability;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Jarry\UbuBundle\Entity\MainCapability;

/**
 * @ORM\Entity
 * @ORM\Table(name="log_weather")
 */
class WeatherCapability extends MainCapability
{
    /**
     *@ORM\Column(type="float")
     */
    private $rainSensor;
    /**
     *@ORM\Column(type="float")
     */
    private $luxSensor;
    /**
     *@ORM\Column(type="float")
     */
    private $tempSensor;
    /**
     *@ORM\Column(type="string", length=255)
     */
    private $windOrientationSensor;
    /**
     *@ORM\Column(type="float")
     */
    private $windPowerSensor;
    /**
     *@ORM\Column(type="float")
     */
    private $hygroSensor;

    /**
     * Set rainSensor
     *
     * @param float $rainSensor
     *
     * @return WeatherCapability
     */
    public function setRainSensor($rainSensor)
    {
        $this->rainSensor = $rainSensor;

        return $this;
    }

    /**
     * Get rainSensor
     *
     * @return float
     */
    public function getRainSensor()
    {
        return $this->rainSensor;
    }

    /**
     * Set luxSensor
     *
     * @param float $luxSensor
     *
     * @return WeatherCapability
     */
    public function setLuxSensor($luxSensor)
    {
        $this->luxSensor = $luxSensor;

        return $this;
    }

    /**
     * Get luxSensor
     *
     * @return float
     */
    public function getLuxSensor()
    {
        return $this->luxSensor;
    }

    /**
     * Set tempSensor
     *
     * @param float $tempSensor
     *
     * @return WeatherCapability
     */
    public function setTempSensor($tempSensor)
    {
        $this->tempSensor = $tempSensor;

        return $this;
    }

    /**
     * Get tempSensor
     *
     * @return float
     */
    public function getTempSensor()
    {
        return $this->tempSensor;
    }

    /**
     * Set windOrientationSensor
     *
     * @param string $windOrientationSensor
     *
     * @return WeatherCapability
     */
    public function setWindOrientationSensor($windOrientationSensor)
    {
        $this->windOrientationSensor = $windOrientationSensor;

        return $this;
    }

    /**
     * Get windOrientationSensor
     *
     * @return string
     */
    public function getWindOrientationSensor()
    {
        return $this->windOrientationSensor;
    }

    /**
     * Set windPowerSensor
     *
     * @param float $windPowerSensor
     *
     * @return WeatherCapability
     */
    public function setWindPowerSensor($windPowerSensor)
    {
        $this->windPowerSensor = $windPowerSensor;

        return $this;
    }

    /**
     * Get windPowerSensor
     *
     * @return float
     */
    public function getWindPowerSensor()
    {
        return $this->windPowerSensor;
    }

    /**
     * Set hygroSensor
     *
     * @param float $hygroSensor
     *
     * @return WeatherCapability
     */
    public function setHygroSensor($hygroSensor)
    {
        $this->hygroSensor = $hygroSensor;

        return $this;
    }

    /**
     * Get hygroSensor
     *
     * @return float
     */
    public function getHygroSensor()
    {
        return $this->hygroSensor;
    }
}
