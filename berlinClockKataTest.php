<?php
require_once("berlinClockKata.php");

use PHPUnit\Framework\TestCase;

class berlinClockKataTest extends TestCase
{
   public function testSimpleMinutes() : void{
       $berlinClockKata = new berlinClockKata();
       $result = $berlinClockKata->simpleMinutes(0);
       $this->assertEquals(0, $result);
       $result = $berlinClockKata->simpleMinutes(1);
       $this->assertEquals(1, $result);
       $result = $berlinClockKata->simpleMinutes(2);
       $this->assertEquals(2, $result);
       $result = $berlinClockKata->simpleMinutes(3);
       $this->assertEquals(3, $result);
       $result = $berlinClockKata->simpleMinutes(4);
       $this->assertEquals(4, $result);
   }

    public function testBlock5Minutes(): void {
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->block5Minutes(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->block5Minutes(5);
        $this->assertEquals(1, $result);
        $result = $berlinClockKata->block5Minutes(10);
        $this->assertEquals(2, $result);
        $result = $berlinClockKata->block5Minutes(15);
        $this->assertEquals(3, $result);
        $result = $berlinClockKata->block5Minutes(20);
        $this->assertEquals(4, $result);
        $result = $berlinClockKata->block5Minutes(25);
        $this->assertEquals(5, $result);
        $result = $berlinClockKata->block5Minutes(30);
        $this->assertEquals(6, $result);
        $result = $berlinClockKata->block5Minutes(35);
        $this->assertEquals(7, $result);
        $result = $berlinClockKata->block5Minutes(40);
        $this->assertEquals(8, $result);
        $result = $berlinClockKata->block5Minutes(45);
        $this->assertEquals(9, $result);
        $result = $berlinClockKata->block5Minutes(50);
        $this->assertEquals(10, $result);
        $result = $berlinClockKata->block5Minutes(55);
        $this->assertEquals(11, $result);
    }

    public function testSimpleHeure() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->simpleHeure(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->simpleHeure(1);
        $this->assertEquals(1, $result);
        $result = $berlinClockKata->simpleHeure(2);
        $this->assertEquals(2, $result);
        $result = $berlinClockKata->simpleHeure(3);
        $this->assertEquals(3, $result);
        $result = $berlinClockKata->simpleHeure(4);
        $this->assertEquals(4, $result);
    }

    public function testBlock5Heures() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->block5Heure(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->block5Heure(5);
        $this->assertEquals(1, $result);
        $result = $berlinClockKata->block5Heure(10);
        $this->assertEquals(2, $result);
        $result = $berlinClockKata->block5Heure(15);
        $this->assertEquals(3, $result);
        $result = $berlinClockKata->block5Heure(20);
        $this->assertEquals(4, $result);
    }

    public function testSecondes() : void {
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->secondes(0);
        $this->assertEquals(1, $result);
        $result = $berlinClockKata->secondes(1);
        $this->assertEquals(0, $result);
    }

    public function testHeureTotal() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->heureTotal(0, 0, 0);
        $this->assertEquals("0 0 0 0 1", $result);
        $result = $berlinClockKata->heureTotal(12, 50, 13);
        $this->assertEquals("2 2 10 0 0", $result);
        $result = $berlinClockKata->heureTotal(10, 51, 16);
        $this->assertEquals("2 0 10 1 1", $result);
        $result = $berlinClockKata->heureTotal(23, 59, 58);
        $this->assertEquals("4 3 11 4 1", $result);
    }

    /*------BerlinClock -> Heure normal------*/
    public function testPariteSeconde() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->ligne_parite_seconde(0);
        $this->assertEquals("impaire", $result);
        $result = $berlinClockKata->ligne_parite_seconde(1);
        $this->assertEquals("paire", $result);
    }


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

    public function testLigne1Heure() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->ligne_1_heure(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->ligne_1_heure(1);
        $this->assertEquals(1, $result);
        $result = $berlinClockKata->ligne_1_heure(2);
        $this->assertEquals(2, $result);
        $result = $berlinClockKata->ligne_1_heure(3);
        $this->assertEquals(3, $result);
        $result = $berlinClockKata->ligne_1_heure(4);
        $this->assertEquals(4, $result);
    }

    public function testLigne5Minutes() : void{
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->ligne_5_minutes(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->ligne_5_minutes(1);
        $this->assertEquals(5, $result);
        $result = $berlinClockKata->ligne_5_minutes(2);
        $this->assertEquals(10, $result);
        $result = $berlinClockKata->ligne_5_minutes(3);
        $this->assertEquals(15, $result);
        $result = $berlinClockKata->ligne_5_minutes(4);
        $this->assertEquals(20, $result);
        $result = $berlinClockKata->ligne_5_minutes(5);
        $this->assertEquals(25, $result);
        $result = $berlinClockKata->ligne_5_minutes(6);
        $this->assertEquals(30, $result);
        $result = $berlinClockKata->ligne_5_minutes(7);
        $this->assertEquals(35, $result);
        $result = $berlinClockKata->ligne_5_minutes(8);
        $this->assertEquals(40, $result);
        $result = $berlinClockKata->ligne_5_minutes(9);
        $this->assertEquals(45, $result);
        $result = $berlinClockKata->ligne_5_minutes(10);
        $this->assertEquals(50, $result);
        $result = $berlinClockKata->ligne_5_minutes(11);
        $this->assertEquals(55, $result);
    }

    public function testLigne1Minute(): void {
        $berlinClockKata = new berlinClockKata();
        $result = $berlinClockKata->ligne_1_minute(0);
        $this->assertEquals(0, $result);
        $result = $berlinClockKata->ligne_1_minute(1);
        $this->assertEquals(1, $result);
        $result = $berlinClockKata->ligne_1_minute(2);
        $this->assertEquals(2, $result);
        $result = $berlinClockKata->ligne_1_minute(3);
        $this->assertEquals(3, $result);
        $result = $berlinClockKata->ligne_1_minute(4);
        $this->assertEquals(4, $result);
    }


}
