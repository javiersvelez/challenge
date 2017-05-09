<?php
include('Challenge.php');
use PHPUnit\Framework\TestCase;
use Linio\Challenge;

/**
 * @covers Challenge
 */

class ChallengeTest extends TestCase
{
	public function testNumeros(){
		$myChallenge = new Challenge();
		$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);

		$expected = array(1,2,'Linio',4,'IT','Linio',7,8,'Linio','IT',11,'Linio',13,14,'Linianos',16,17,'Linio',19,'IT','Linio',22,23,'Linio','IT',26,'Linio',28,29,'Linianos');

		$proccesedNumbers = $myChallenge->procesar($numeros);
		$this->assertEquals($expected,$proccesedNumbers);
	}

}