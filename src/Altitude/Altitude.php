<?php
namespace Volantus\VarioVerticalSpeed\Altitude;

use Volantus\VarioVerticalSpeed\General\UniqueTimestamp;

/**
 * Interface Altitude
 *
 * @package Volantus\VarioVerticalSpeed\Altitude
 */
interface Altitude extends UniqueTimestamp
{
    /**
     * @return float Absolute altitude in meters above sea level
     */
    public function getAbsoluteAltitude(): float;
}