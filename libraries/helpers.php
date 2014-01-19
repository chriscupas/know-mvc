<?php

if(!class_exists('Volumes'))
{
	class Volumes
	{
		public $volume;
	    function setVolume($vol = 10) {
			$this->volume = $vol;
		}

		function getVolume() {
			    return $this->volume;
		}

		function decrease($decrease_volume) {
			 $this->volume =(int)$this->volume - $decrease_volume;
		}

		function increase($increase_volume)
		{
	         $this->volume = (int)$this->volume + $increase_volume;   
		}
	}
}