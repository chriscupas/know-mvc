<form method="post" action="?entertainment=radio">
	<input type="hidden" name="current_volume" value="<?php echo $getvolume ?>" />
	<input type="hidden" name="current_frequency" value="<?php echo $radiochannel ?>" />
	Increase Volume TV: <input type="text" name="inc_volume" /> Decrease Volume TV: <input type="text" name="dec_volume" /><input type="submit" value="Submit" name="volume_iterate" />
</form>