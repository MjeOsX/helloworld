<?php
	class Fibonacci {
		public static function calculate($index) {
			if ($index < 0) {
				return -1;
			} else {
				$data = Fibonacci::calculateArray($index);
				return $data[0];
			}
		}
		
		private static function calculateArray($index) {
			if ($index < 2) {
				return array(1, 1);
			} else {
				$data = Fibonacci::calculateArray($index - 1);
				$temp = $data[1];
				$data[1] = $data[0];
				$data[0] += $temp;
				return $data;
			}
		}
	}
	
	echo Fibonacci::calculate(10);