<?php
function ip_range($start,$end)
{
	$array = array();
	$start_point = explode(".",$start);
	$end_point = explode(".",$end);
	$a1 = $start_point[0]; $b1 = $start_point[1]; $c1 = $start_point[2]; $d1 = $start_point[3];
	$a2 = $end_point[0]; $b2 = $end_point[1]; $c2 = $end_point[2]; $d2 = $end_point[3];

	    while ($d2 >= $d1 || $c2 > $c1 || $b2 > $b1 || $a2 > $a1) {
	    	if($d1 > 255)
	    	{
	    		$d1 = 1;
	    		$c1 ++;
	    	}
	    	if($c1 > 255)
	    	{
	    		$c1 = 1;
	    		$b1 ++;
	    	}
	    	if($b1 > 255)
	    	{
	    		$b1 = 1;
	    		$a1 ++;
	    	}
	    	$array[] = array('ip'=>$a1.$b1.$c1.$d1);
	    	$d1++;
	    }
	    return $array;
}
?>
