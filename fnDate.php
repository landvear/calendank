<?php

    class findDate
    {
        function getDate($Year)
        {
            $current = array();
            $startDate = new DateTime($Year.'-01-01');

            while ($startDate->format('Y') == $Year){
                $Y = $startDate->format('Y');
                $M = $startDate->format('m');
                $d = $startDate->format('d');

                $current[$Y][$M][$d];

                $startDate->add(new DateInterval('P1D'));
            }

            return $current;

        }
    }
