<?php 
use PHPUnit\Framework\TestCase;
use App\Libraries\Calculator;
// require 'vendor/autoload.php';
class CalculatorTest extends  TestCase
{
	public function setUp(){
		$this->calculator = new Calculator;
	}
	public function inputNumbers(){
		return [
			[2, 2, 4],
			[2.5, 2.5, 5],
			[-3, 1, -2],
			[-9, -9, -18]
		];
	}
	
	/**
	*	@dataProvider inputNumbers
	**/
	public function testAddNumber($x, $y, $sum){
		$this->assertEquals($sum,$this->calculator->add($x,$y));
	}

	/**
	*	@expectedException InvalidArgumentException
	**/
	public function testThrowsExceptionIfNonNumericIsPassed(){
		$this->calculator->add('d',[]);
	}
}