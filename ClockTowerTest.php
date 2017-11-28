<?php
declare(strict_types=1);
ini_set('display_errors', 'On');

use PHPUnit\Framework\TestCase;

/**
 * @covers ClockTower
 */
final class ClockTowerTest extends TestCase
{
  public function testInvalidTimesAreNegativeOne(): void
  {
    $clockTowerObj = new ClockTower();
    // echo ("testInvalidTimesAreNegativeOne: " . $clockTowerObj->countBells('Nine O\'clock', 'Nine O\'clock') . "\n");
    $this->assertEquals(
        -1,
        $clockTowerObj->countBells('Nine O\'clock', 'Nine O\'clock')
    );
  }

  public function testTwoToThreeIsFive(): void
  {
    $clockTowerObj = new ClockTower();
    // echo ("testTwoToThreeIsFive: " . $clockTowerObj->countBells('2:00', '3:00') . "\n");
    $this->assertEquals(
        5,
        $clockTowerObj->countBells('2:00', '3:00')
    );
  }

  public function testFourteenToFifteenIsFive(): void
  {
    $clockTowerObj = new ClockTower();
    // echo ("testTwoToThreeIsFive: " . $clockTowerObj->countBells('2:00', '3:00') . "\n");
    $this->assertEquals(
        5,
        $clockTowerObj->countBells('14:00', '15:00')
    );
  }

}
