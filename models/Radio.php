<?php

include "libraries/helpers.php";

class Radio extends Volumes 
{
	
	public 	$arr = array(
					"89" 	=> "Love Radio",	
					"90" 	=> "Life Radio",	
					"86" 	=> "Talal Radio",	
					"85" 	=> "Chris Radio",	
					"88" 	=> "Faisal Radio",	
					"61" 	=> "Naif Radio",	
					"80" 	=> "Hamad Radio",	
				);


	function frequency($freq = "89") {
		$output;
		foreach($this->arr as $key => $val) 
		{
			if($freq == $key)
			{
				$output = $val;
				
			}			
		}
		if (empty ($output))
		{
            $output = "No Channel";
		}
		return "Radio Channel: <strong>" . $output . "</strong> " ;
	}

 }