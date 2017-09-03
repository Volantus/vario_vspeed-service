<?php
namespace Volantus\VarioVerticalSpeed\VerticalSpeed;

use Volantus\VarioVerticalSpeed\General\DataPoint;

/**
 * Class IntegratedVerticalSpeed
 *
 * @package Volantus\VarioVerticalSpeed\VerticalSpeed
 */
class IntegratedVerticalSpeed extends DataPoint implements VerticalSpeed
{
    /**
     * @var float
     */
    private $verticalSpeed;

    /**
     * @var bool
     */
    private $confirmed;

    /**
     * IntegratedVerticalSpeed constructor.
     *
     * @param float $verticalSpeed
     * @param bool  $confirmed
     * @param float $timestamp
     */
    public function __construct(float $verticalSpeed, bool $confirmed, float $timestamp = null)
    {
        parent::__construct($timestamp);

        $this->verticalSpeed = $verticalSpeed;
        $this->confirmed = $confirmed;
    }

    /**
     * @return float Vertical speed in meters per second
     */
    public function getVerticalSpeed(): float
    {
        return $this->verticalSpeed;
    }

    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }
}