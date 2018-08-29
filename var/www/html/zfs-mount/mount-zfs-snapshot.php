<?php

	$selected_snap1 = $_POST['selected_snapshot1'];
	$selected_snap2 = $_POST['selected_snapshot2'];
	$action = $_POST['action'];
	
	$snapshot1 = explode(" ", $selected_snap1);
	$snapshot2 = explode(" ", $selected_snap2);
	
	print("<html><body><pre>");
	
	if ($action == 'Mount') {

		print("<b>mount command is:</b> mount -t zfs $snapshot1[0] /mnt/temp <br>");
		
		exec("sudo /usr/bin/mount -t zfs $snapshot1[0] /mnt/temp 2>&1", $results );
		$lines = count($results);
		
		for ($line = 0; $line < $lines; $line +=1) {
			print("$results[$line]<br>");
		}
		
		print("<form method='GET' action='unmount-zfs-snapshot.php'></select><input type='submit' value='Unmount'></form></pre></body></html>");
		
	} else if ($action == 'Diff') {
		
		print("<b>diff command is:</b> zfs diff $snapshot1[0] $snapshot2[0] <br>");
		
		exec("sudo /usr/sbin/zfs diff $snapshot1[0] $snapshot2[0] 2>&1", $results );
		$lines = count($results);
		
		for ($line = 0; $line < $lines; $line +=1) {
			print("$results[$line]<br>");
		}
	} 
	
?>