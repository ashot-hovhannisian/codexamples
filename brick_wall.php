<?php
//https://leetcode.com/problems/brick-wall/
//Brick Wall solution on PHP (shortest code)
function leastBricks($wall=[]) {       
    foreach ($wall as $key => $value) {
        for ($i = 0; $i < count($value) - 1; $i++) {
		//the maximum coincidence of the sums of bricks, means the maximum total boundary line
            $arr[] = array_sum(array_slice($value, 0, $i + 1));
        }
    }
	//the difference of all horizontal lines of bricks and the maximum coincident line will give an our solutuion
    return count($wall) - max(array_count_values($arr));
}
?>