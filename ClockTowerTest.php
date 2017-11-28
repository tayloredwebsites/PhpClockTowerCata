<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers ClockTower
 */
final class ClockTowerTest extends TestCase
{
  public function testInvalidTimesAreNegativeOne(): void
  {
    $clockTowerObj = new ClockTower();
    echo ($clockTowerObj->countBells('Nine O\'clock', 'Nine O\'clock'));
    $this->assertEquals(
        -1,
        $clockTowerObj->countBells('Nine O\'clock', 'Nine O\'clock')
    );
  }
}
