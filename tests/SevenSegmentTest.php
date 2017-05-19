<?php

use \SevenSegment;

class SevenSegmentTest extends \PHPUnit_Framework_TestCase {

	public function testZero(){
		$expected = " _\n| |\n|_|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(0);

		$this->assertEquals($expected, $result);
	}

	public function testOne(){
		$expected = "\n  |\n  |";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(1);

		$this->assertEquals($expected, $result);
	}

	public function testTwo(){
		$expected = " _\n _|\n|_";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(2);

		$this->assertEquals($expected, $result);
	}

	public function testThree(){
		$expected = " _\n _|\n _|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(3);

		$this->assertEquals($expected, $result);
	}

	public function testFour(){
		$expected = "\n|_|\n  |";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(4);

		$this->assertEquals($expected, $result);
	}

	public function testFive(){
		$expected = " _\n|_\n _|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(5);

		$this->assertEquals($expected, $result);
	}

	public function testSix(){
		$expected = " _\n|_\n|_|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(6);

		$this->assertEquals($expected, $result);
	}

	public function testSeven(){
		$expected = " _\n  |\n  |";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(7);

		$this->assertEquals($expected, $result);
	}

	public function testEight(){
		$expected = " _\n|_|\n|_|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(8);

		$this->assertEquals($expected, $result);
	}

	public function testNine(){
		$expected = " _\n|_|\n _|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(9);

		$this->assertEquals($expected, $result);
	}

	public function testTen(){
		$expected = "    _\n  || |\n  ||_|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(10);

		$this->assertEquals($expected, $result);
	}

	public function testEleven(){
		$expected = "\n  |  |\n  |  |";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(11);

		$this->assertEquals($expected, $result);
	}

	public function testTweleve(){
		$expected = "    _\n  | _|\n  ||_";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(12);

		$this->assertEquals($expected, $result);
	}

	public function testHundread(){
		$expected = "    _  _\n  || || |\n  ||_||_|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(100);

		$this->assertEquals($expected, $result);
	}

	public function testTwoHundreadFiftyFive(){
		$expected = " _  _  _\n _||_ |_\n|_  _| _|";

		echo("\n");
		echo($expected);

		$ss = new SevenSegment();

		$result = $ss->convert(255);

		$this->assertEquals($expected, $result);
	}
}
