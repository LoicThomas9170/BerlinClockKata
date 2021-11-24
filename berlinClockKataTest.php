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
}
