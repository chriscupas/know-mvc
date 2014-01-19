<?php
include "libraries/helpers.php";

class TV extends Volumes 
{
	
	public 	$arr1 = array(
					"90" 	=> "Loves",	
					"80" 	=> "Lifes",	
					"70" 	=> "Talals",	
					"60" 	=> "Chris",	
					"40" 	=> "Faisals",	
					"50" 	=> "Naifs",	
					"30" 	=> "Hamads",	
				);


	function frequency($freq1 = "90") {
		$output1 = "";

		foreach($this->arr1 as $key1 => $val1) 
		{
			if($freq1 == $key1)
			{
				$output1 = $val1;
				
			}			
		}

		if (empty ($output1))
		{
            $output1 = "No Channel";
		}
		return "TV Channel: <strong>" . $output1 . "</strong> " ;
	}

 }


