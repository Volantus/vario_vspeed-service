<?php
namespace Volantus\VarioVerticalSpeed\VerticalSpeed;

use Volantus\VarioVerticalSpeed\General\UniqueTimestamp;

/**
 * Interface VerticalSpeed
 *
 * @package Volantus\VarioVerticalSpeed\VerticalSpeed
 */
interface VerticalSpeed extends UniqueTimestamp
{
    /**
     * @return float Vertical speed in meters per second
     */
    public function getVerticalSpeed(): float;
}