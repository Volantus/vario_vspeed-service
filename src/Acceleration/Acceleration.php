<?php
namespace Volantus\VarioVerticalSpeed\Acceleration;

use Volantus\VarioVerticalSpeed\General\UniqueTimestamp;

/**
 * Interface Acceleration
 *
 * @package Volantus\VarioVerticalSpeed\Acceleration
 */
interface Acceleration extends UniqueTimestamp
{
    /**
     * @return float Vertical acceleration in m/s^2
     */
    public function getVerticalAcceleration(): float;
}