<?php

	$selected_snap = $_GET['selected_snapshot'];
	$snapshot = explode(" ", $selected_snap);
	
	print("<html><body><pre><b>mount command is:</b> mount -t zfs $snapshot[0] /mnt/temp");
	
    exec("sudo /usr/bin/mount -t zfs $snapshot[0] /mnt/temp 2>&1", $results );
    $lines = count($results);
	
	for ($line = 0; $line < $lines; $line +=1) {
		print("$results[$line]<br>");
    }
	
	print("<form method='GET' action='unmount-zfs-snapshot.php'></select><input type='submit' value='Unmount'></form></pre></body></html>");
	
?>