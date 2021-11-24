<?php

class berlinClockKata
{


    public function ligne_5_heure(int $nbrEmpoule){

        return $nbrEmpoule * 5;
    }

    public function ligne_1_heure(int $nbrEmpoule)
    {
        return $nbrEmpoule;
    }

    public function ligne_5_minutes(int $nbrEmpoule)
    {
        return $nbrEmpoule * 5;
    }

    public function ligne_1_minute(int $nbrEmpoule)
    {
        return $nbrEmpoule;
    }

    public function ligne_parite_seconde(int $empouleAllume)
    {
        if($empouleAllume == 0){
            return "impaire";
        }
        elseif($empouleAllume == 1){
            return "paire";
        }
    }
}