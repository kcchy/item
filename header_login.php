<?php

if(isset($_SESSION['user'])) {
	echo "<div align='right' >»¶Ó­Äú:".$_SESSION['user']."&nbsp;&nbsp<a href='includes/logout.php' style='text-decoration: none'><font
            color='#ffffff'>×¢Ïú</font></a></div>"; ?>
	<?php }
	else {
		echo "<div align='right'><a href='login.php' style='text-decoration: none'><font
            color='#ffffff'>µÇÂ¼</font></a></div>";
	}