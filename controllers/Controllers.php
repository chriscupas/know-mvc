<?php

include "models/Tv.php";
include "models/Radio.php";

class decision {
	 public $modeltv;
	 public $radio;


	 function __construct() {

	 	$this->modeltv 	= new TV;
	 	$this->radio 	= new Radio;

	 }

	 function decide() {

	 	if(@$_GET['entertainment'] == "radio")
	 	{
	 		$radio = new Radio;

			// This is to Incraese and Decrease Volume
			 if(!empty($_POST['inc_volume']) or !empty($_POST['dec_volume']))
			 {
			       $this->radio->setVolume($_POST['current_volume']);


			       if(!empty($_POST['inc_volume']))
			       { 
			          	$this->radio->increase($_POST['inc_volume']);
			       }
			       elseif(!empty($_POST['dec_volume']))
			       {
			            $this->radio->decrease($_POST['dec_volume']);
			       }   
			       
			       $radiochannel = @$_POST['current_frequency'];
			       $thenewradiovolume = $this->radio->getVolume();
			 }

	 		if(!empty($_POST['frequency']))
	 		{
	 			$radiochannel = $this->radio->frequency($_POST['frequency']);
	 			$this->radio->setVolume($_POST['volume']);
 				$getvolume = $this->radio->getVolume();
 				include "views/radio_volume.php";	 			

	 		}

	 		$radiooutput = "This is Radio";
	 		include "views/radioview.php";

	 	}
	 	else
	 	{
	 		

	 		if(!empty($_POST['tvsubmit']))
	 		{
	 			$tvchannel = $this->modeltv->frequency($_POST['frequency1']);
	 		}

	 		
	 		//$postfreq = $_POST['frequency1'];
	 		$tvoutput = "This is TV";
	 		include "views/tvview.php";	 		
	 	}

	 }


}