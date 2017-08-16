<?php

<<<<<<< HEAD
   /* class CustomDate
    {
        function getDate($Year)
        {

            $calendar = array();
            $startDate = new DateTime($Year.'-01-01');

            while ($startDate->format('Y') == $Year)
            {
                $Y = $startDate->format('Y');
                $M = $startDate->format('m');
                $d = $startDate->format('d');
                $w = str_replace('0','7',$startDate->format('w'));

                $calendar[$Y][$M][$d] = $w;
=======
class customDate
{
  public $Year;
  public $Month;
  public $Day;
>>>>>>> origin/master

  public function __construct($Y, $M, $D)
  {
    $Year = $Y;
    $Month = $M;
    $Day = $D;
  }
}

<<<<<<< HEAD
            return $calendar;

        }
    }*/


class customDate
{
   public $Year = 0;
   public $Month = 0;
   public $Day =0;

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
            $calendar = new customDate($startDate->format('Y'), $startDate->format('m'), $startDate->format('d'));
            $startDate->add(new DateInterval('P1D'));
        }
        print_r($calendar);
        return $calendar;
    }
=======
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
>>>>>>> origin/master
}
