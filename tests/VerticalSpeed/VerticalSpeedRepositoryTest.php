<?php
namespace Volantus\VarioVerticalSpeed\Tests\VerticalSpeed;

use PHPUnit\Framework\TestCase;
use Volantus\VarioVerticalSpeed\Acceleration\Acceleration;
use Volantus\VarioVerticalSpeed\VerticalSpeed\VerticalSpeedRepository;

/**
 * Class VerticalSpeedRepositoryTest
 *
 * @package Volantus\VarioVerticalSpeed\Tests\VerticalSpeed
 */
class VerticalSpeedRepositoryTest extends TestCase
{
    /**
     * @var VerticalSpeedRepository
     */
    private $repository;

    protected function setUp()
    {
        $this->repository = new VerticalSpeedRepository(0);
    }

    public function test_integrate_veryFirstValue()
    {
        $this->repository->integrate($this->buildAcceleration(0.5, 3));

        $verticalSpeed = $this->repository->getCurrentSpeed();
        self::assertFalse($verticalSpeed->isConfirmed());
        self::assertEquals(1.5, $verticalSpeed->getVerticalSpeed());
    }

    public function test_integrate_relativeIntegration()
    {
        $this->repository->integrate($this->buildAcceleration(0.5, 3));
        $this->repository->integrate($this->buildAcceleration(2.5, 10));

        $verticalSpeed = $this->repository->getCurrentSpeed();
        self::assertFalse($verticalSpeed->isConfirmed());
        self::assertEquals(21.5, $verticalSpeed->getVerticalSpeed());
    }

    public function test_integrate_negativeValues()
    {
        $this->repository->integrate($this->buildAcceleration(0.5, 3));
        $this->repository->integrate($this->buildAcceleration(2.5, -10));

        $verticalSpeed = $this->repository->getCurrentSpeed();
        self::assertFalse($verticalSpeed->isConfirmed());
        self::assertEquals(-18.5, $verticalSpeed->getVerticalSpeed());
    }

    /**
     * @param float $timestamp
     * @param float $verticalAcceleration
     *
     * @return Acceleration
     */
    private function buildAcceleration(float $timestamp, float $verticalAcceleration): Acceleration
    {
        /** @var Acceleration|\PHPUnit_Framework_MockObject_MockObject $acceleration */
        $acceleration = $this->getMockBuilder(Acceleration::class)->getMock();
        $acceleration->method('getTimestamp')->willReturn($timestamp);
        $acceleration->method('getVerticalAcceleration')->willReturn($verticalAcceleration);

        return $acceleration;
    }
}