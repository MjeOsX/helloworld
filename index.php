<?php
	echo 'Hello World';
	
	function fibonacci($index) {
		if ($index < 0) {
			return -1;
		} else if ($index < 2) {
			return 1;
		} else {
			return fibonacci($index - 1) + fibonacci($index - 2);
		}
	}