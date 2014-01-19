<?php
echo "<h1>".$tvoutput ."</h1>";
?>
<ul class="menu">
	<li><a href="?entertainment=radio">Radio</a></li>
	<li><a href="?entertainment=tv">TV</a></li>
</ul>

<?php

echo @$tvchannel;

?>

<form method="post" action="?entertainment=tv">
	<p>Frequency TV : <input type="text" name="frequency1" /> 
 	<input type="submit" value="Submit" name="tvsubmit" /></p>
</form>