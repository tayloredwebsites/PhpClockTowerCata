<?php
declare(strict_types=1);
ini_set('display_errors', 'On');

final class ClockTower
{

  public function countBells(string $startTimeStr, string $endTimeStr): int {
    $startHour = $this->getHour($startTimeStr);
    $endHour = $this->getHour($endTimeStr);
    if ($startHour >= 0 && $endHour >= 0) {
      $hoursArray = range($startHour, $endHour);
      return array_reduce($hoursArray, array($this, 'sumBellsByHours'), 0);
    } else {
      return -1;
    }
  }

  private function sumBellsByHours(int $a, int $b) {
    return $a + $b;
  }

  private function getHour(string $timeStr): int
  {
    $timeNums = explode(':', $timeStr, 2);
    if ( count($timeNums) === 2 && preg_match('/^\d+$/', $timeNums[0]) ) {
      return (int)$timeNums[0];
    } else {
      return -2;
    }
  }
}
