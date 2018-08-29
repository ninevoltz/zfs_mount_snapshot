<?php

	exec("sudo /usr/bin/umount /mnt/temp 2>&1", $results );
    $lines = count($results);
	
	for ($line = 0; $line < $lines; $line +=1) {
		print("$results[$line]<br>");
    }
	
	if ($lines == 0) print("Unmounted /mnt/temp.");
	
?>