<?php
declare(strict_types=1);

final class ClockTower
{

  public function countBells(string $startTimeStr, string $endTimeStr): int {
    $startHour = $this->getHour($startTimeStr);
    $endHour = $this->getHour($endTimeStr);
    if ($startHour >= 0 && $endHour >= 0) {
      return $endHour - $startHour;
    } else {
      return -1;
    }
  }

  private function getHour(string $timeStr): int
  {
    $timeNums = explode(':', $timeStr, 2);
    if ($timeNums.length == 2 && is_int($timeNums[0])) {
      return (int)$hour;
    } else {
      return -1;
    }
  }
}
