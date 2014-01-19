<?php
echo "<h1>".$radiooutput ."</h1>";
?>
<ul class="menu">
	<li><a href="?entertainment=radio">Radio</a></li>
	<li><a href="?entertainment=tv">TV</a></li>
</ul>

<?php

echo @$radiochannel;
echo "<br />".@$getvolume;
echo @$thenewradiovolume;
?>


<form method="post" action="?entertainment=radio">
	Radio Frequency : <input type="text" name="frequency" /> Volume: <input type="text" name="volume" /><input type="submit" value="Submit" />
</form>
