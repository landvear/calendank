<?php

class customDate
{
  public $Year;
  public $Month;
  public $Day;

  public function __construct($Y, $M, $D)
  {
    $Year = $Y;
    $Month = $M;
    $Day = $D;
  }
}

class findDate
{
  function getDate($Year)
  {
    $calendar = array();
    $startDate = new DateTime($Year.'-01-01');
    while ($startDate->format('Y') == $Year)
    {
      $calendar[] = new customDate($startDate->format('Y'), $startDate->format('m'), $startDate->format('d'));
      $startDate->add(new DateInterval('P1D'));
    }
    print_r($calendar);
    return $calendar;
  }
}
