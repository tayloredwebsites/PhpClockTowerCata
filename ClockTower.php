<?php
declare(strict_types=1);
ini_set('display_errors', 'On');

final class ClockTower
{

  public function countBells(string $startTimeStr, string $endTimeStr): int {
    $startHour = $this->getHour($startTimeStr, TRUE);
    $endHour = $this->getHour($endTimeStr, FALSE);
    if ($startHour >= 0 && $endHour >= 0) {
      $hoursArray = range($startHour, $endHour);
      if (count($hoursArray) === 1) {
        return $this->setBellsForHour($hoursArray[0]);
      } else {
        return array_reduce($hoursArray, array($this, 'sumBellsByHours'), 0);
      }
    } else {
      return -1;
    }
  }

  private function sumBellsByHours(int $a, int $b) {
    return $this->setBellsForHour($a) + $this->setBellsForHour($b);
  }

  private function setBellsForHour($hour) {
    $hourMod = $hour % 12;
    if ($hourMod == 0) {
      return 12;
    } else {
      return $hourMod;
    }
  }

  private function getHour(string $timeStr, bool $isStartTime): int
  {
    $timeNums = explode(':', $timeStr, 2);
    if ( count($timeNums) === 2 &&
      preg_match('/^\d+$/', $timeNums[0]) &&
      preg_match('/^\d+$/', $timeNums[1])
    ) {
      if ( (int)$timeNums[1] === 0) {
        return (int)$timeNums[0];
      } else if ($isStartTime) {
        return (int)$timeNums[0] + 1;
      } else {
        return (int)$timeNums[0];
      }
    } else {
      return -2;
    }
  }
}
