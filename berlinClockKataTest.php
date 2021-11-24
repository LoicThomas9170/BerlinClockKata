<?php
require_once("berlinClockKata.php");

use PHPUnit\Framework\TestCase;

class berlinClockKataTest extends TestCase
{


    public function testLigne5Heure() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->ligne_5_heure(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->ligne_5_heure(1);
        $this->assertEquals(5, $result);
        $result = $berlinClockKata->ligne_5_heure(2);
        $this->assertEquals(10, $result);
        $result = $berlinClockKata->ligne_5_heure(3);
        $this->assertEquals(15, $result);
        $result = $berlinClockKata->ligne_5_heure(4);
        $this->assertEquals(20, $result);
    }

}
