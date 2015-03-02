<?php

namespace aulasl\FizzBuzz;

class FizzBuzzNumber
{
	private $fizz;

	public function __construct($fizz, $buzz)
	{
		$this->fizz = $fizz;
		$this->buzz = $buzz;
	}

	public function answer($number)
	{
		$answer = '';

		if ( $number % $this->fizz == 0 ) $answer = 'F';
		if ( $number % $this->buzz == 0 ) $answer .= 'B';

		return empty($answer) ? $number : $answer ;
	}
}