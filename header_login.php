<?php

if(isset($_SESSION['user'])) {
	echo "<div align='right' >��ӭ��:".$_SESSION['user']."&nbsp;&nbsp<a href='includes/logout.php' style='text-decoration: none'><font
            color='#ffffff'>ע��</font></a></div>"; ?>
	<?php }
	else {
		echo "<div align='right'><a href='login.php' style='text-decoration: none'><font
            color='#ffffff'>��¼</font></a></div>";
	}