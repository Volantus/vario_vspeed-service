<?php
namespace Volantus\VarioVerticalSpeed\VerticalSpeed;

use Volantus\VarioVerticalSpeed\Acceleration\Acceleration;

/**
 * Class VerticalSpeedRepository
 *
 * @package Volantus\VarioVerticalSpeed\VerticalSpeed
 */
class VerticalSpeedRepository
{
    /**
     * Timestamp used for integration for very first acceleration value
     *
     * @var float
     */
    private $zeroTimestamp;

    /**
     * @var Acceleration[]
     */
    private $accelerations = [];

    /**
     * @var VerticalSpeed[]
     */
    private $baseValues = [];

    /**
     * @var float
     */
    private $currentSpeed = 0.0;

    /**
     * VerticalSpeedRepository constructor.
     *
     * @param float $zeroTimestamp
     */
    public function __construct($zeroTimestamp = null)
    {
        $this->zeroTimestamp = $zeroTimestamp !== null ? $zeroTimestamp : microtime(true);
    }


    /**
     * @param Acceleration $acceleration
     */
    public function integrate(Acceleration $acceleration)
    {
        if (!empty($this->accelerations)) {
            $timeDelta = $acceleration->getTimestamp() - end($this->accelerations)->getTimestamp();
        } else {
            $timeDelta = $acceleration->getTimestamp() - $this->zeroTimestamp;
        }

        $this->currentSpeed += ($acceleration->getVerticalAcceleration() * $timeDelta);
        $this->accelerations[] = $acceleration;
    }

    /**
     * @return IntegratedVerticalSpeed
     */
    public function getCurrentSpeed(): IntegratedVerticalSpeed
    {
        return new IntegratedVerticalSpeed($this->currentSpeed, false);
    }
}