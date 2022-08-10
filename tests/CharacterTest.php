<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase {

	/** @test */
	public function test_character_Health_starting_at_1000_points()
	{
		//Given
		$goku = new Character;

		//When
		$gokuHealth = $goku->getHealth();

		//Then
		$this->assertEquals(1000, $gokuHealth);

	}
	
	public function test_character_Level_starting_at_1()
	{
		//Given
		$goku = new Character;

		//When
		$gokuLevel = $goku->getLevel();

		//Then
		$this->assertEquals(1, $gokuLevel);

	}

	public function test_may_be_Alive_or_Dead()
	{
		//Given
		$goku = new Character;

		//When
		$gokuResult = $goku->isAlive();

		//Then
		$this->assertEquals(true, $gokuResult);

	}

	public function  test_character_Damage()
	{
		//Given
		$goku = new Character;
		$booboo = new Character;

		//When
		$booboo->attack($goku);
		$resultGoku = $goku->getHealth();

		//Then
		$this->assertEquals(900, $resultGoku);
		$this->assertEquals(1000, $booboo->getHealth());

	}

	public function  test_character_Dead()
	{
		//Given
		$goku = new Character;
		$booboo = new Character;

		//When
		$booboo->attack($goku);
		$resultGoku = $goku->getHealth();

		//Then
		$this->assertEquals(0, $resultGoku);
		$this->assertEquals(false, $goku->isAlive());

	}
}


