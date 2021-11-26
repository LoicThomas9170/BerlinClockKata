<?php

class berlinClockKata
{
    public function simpleMinutes(int $minute){
        return $minute % 5;
    }

    public function block5Minutes(int $minute){
        return (int)($minute / 5);
    }

    public function simpleHeure(int $heure){
        return $heure % 5;
    }

    public function block5Heure(int $heure){
        return (int)($heure/5);
    }

    public function secondes(int $secondes){
        if ($secondes % 2 == 0) return 1;
        if ($secondes % 2 != 0) return 0;
    }

    public function heureTotal(int $heures, int $minutes, int $secondes){
        $bloc5Heures = strval($this->block5Heure($heures));
        $simpleHeure = strval($this->simpleHeure($heures));
        $bloc5Minutes = strval($this->block5Minutes($minutes));
        $simpleMinutes = strval($this->simpleMinutes($minutes));
        $secondes = strval($this->secondes($secondes));

        return  $bloc5Heures. " " . $simpleHeure . " " . $bloc5Minutes . " " . $simpleMinutes . " " . $secondes;
    }


    /*------BerlinClock -> Heure normal------*/
    public function ligne_5_heure(int $nbrEmpoule){
        return $nbrEmpoule * 5;
    }

    public function ligne_1_heure(int $nbrEmpoule){
        return $nbrEmpoule;
    }

    public function ligne_5_minutes(int $nbrEmpoule){
        return $nbrEmpoule * 5;
    }

    public function ligne_1_minute(int $nbrEmpoule){
        return $nbrEmpoule;
    }

    public function ligne_parite_seconde(int $empouleAllume){
        if($empouleAllume == 0){
            return "impaire";
        }
        elseif($empouleAllume == 1){
            return "paire";
        }
    }

}