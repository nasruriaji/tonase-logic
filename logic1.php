<?php

function add($num, $k){
	foreach($num as $key => $i){
		foreach($num as $oh => $j){
			
			if (($i + $j) == $k){
				return "True!";
			}
				
			foreach($num as $li => $l){
				
				if (($i+$j+$l) == $k){
				return "True";
				}
				
			}
		}
		return "False";
	}
}

$nums = [20, 303, 3, 4, 25];
$k = 30;
echo add($nums, $k);

