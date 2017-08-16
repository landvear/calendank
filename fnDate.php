<?php

class customDate
{
  public $Year;
  public $Month;
  public $Day;

  public function __construct($Y, $M, $D)
  {
    $this->Year = $Y;
    $this->Month = $M;
    $this->Day = $D;
  }
}

function initCalendar($Year)
{
  $calendar = array();
  $startDate = new DateTime($Year.'-01-01');
  while ($startDate->format('Y') == $Year)
  {
    $calendar[] = new customDate($Year, $startDate->format('m'), $startDate->format('d'));
    print_r($calendar[0]);
    $startDate->add(new DateInterval('P1D'));
  }
  return $calendar;
}
