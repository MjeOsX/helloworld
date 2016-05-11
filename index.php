<?php
	echo 'Hello World';
	
	function fibonacci($index) {
		if ($index < 0) {
			return -1;
		} else {
			$data = fibonacciArray($index);
			return $data[0];
		}
	}
	
	function fibonacciArray($index) {
		if ($index < 2) {
			return array(1, 1);
		} else {
			$data = fibonacciArray($index - 1);
			$temp = $data[1];
			$data[1] = $data[0];
			$data[0] += $temp;
			return $data;
		}
	}
	
	echo fibonacci(10);