<?php

namespace Jarry\UbuBundle\Entity;

/**
 * HeatingLog
 */
class HeatingLog
{
    /**
     * @var float
     */
    private $tempActor;

    /**
     * @var float
     */
    private $tempTargetSensor;

    /**
     * @var float
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

