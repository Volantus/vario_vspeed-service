<?php
namespace Volantus\VarioVerticalSpeed\General;

/**
 * Class DataPoint
 *
 * @package Volantus\VarioVerticalSpeed\General
 */
abstract class DataPoint implements UniqueTimestamp
{
    /**
     * @var float
     */
    protected $timestamp;

    /**
     * DataPoint constructor.
     *
     * @param float $timestamp
     */
    public function __construct($timestamp = null)
    {
        $this->timestamp = $timestamp ?: microtime(true);
    }

    /**
     * @return float
     */
    public function getTimestamp(): float
    {
        return $this->timestamp;
    }
}