<?php

namespace Jarry\UbuBundle\Entity\Log;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Jarry\UbuBundle\Entity\Log\MainLog;

/**
 * @ORM\Entity
 * @ORM\Table(name="ubu_heating_log")
 */
class HeatingLog extends MainLog
{
    
    /**
     *@ORM\Column(type="float")
     */
    private $tempActor;
    
    /**
     *@ORM\Column(type="float")
     */
    private $tempTargetSensor;
    
    /**
     *@ORM\Column(type="float")
     */
    private $tempEnvSensor;

    /**
     * Set tempActor
     *
     * @param float $tempActor
     *
     * @return HeatingLog
     */
    public function setTempActor($tempActor)
    {
        $this->tempActor = $tempActor;

        return $this;
    }

    /**
     * Get tempActor
     *
     * @return float
     */
    public function getTempActor()
    {
        return $this->tempActor;
    }

    /**
     * Set tempTargetSensor
     *
     * @param float $tempTargetSensor
     *
     * @return HeatingLog
     */
    public function setTempTargetSensor($tempTargetSensor)
    {
        $this->tempTargetSensor = $tempTargetSensor;

        return $this;
    }

    /**
     * Get tempTargetSensor
     *
     * @return float
     */
    public function getTempTargetSensor()
    {
        return $this->tempTargetSensor;
    }

    /**
     * Set tempEnvSensor
     *
     * @param float $tempEnvSensor
     *
     * @return HeatingLog
     */
    public function setTempEnvSensor($tempEnvSensor)
    {
        $this->tempEnvSensor = $tempEnvSensor;

        return $this;
    }

    /**
     * Get tempEnvSensor
     *
     * @return float
     */
    public function getTempEnvSensor()
    {
        return $this->tempEnvSensor;
    }
}
