<?php

    exec('TERM=xterm /usr/sbin/zfs list -t snapshot 2>&1', $results );
	$lines = count($results);
	
	
    print("<html><body><pre><h3>Mount a ZFS snapshot</h3><br><b>Name                        Used Avail Refer MountPoint</b><br><form method='GET' action='mount-zfs-snapshot.php'><select name='selected_snapshot'>");
	
	for ($line = 1; $line < $lines; $line +=1) {
		$snap = explode(' ', $results[$line]);
		print("<option value='$snap[0]'>$results[$line]</option>");
    }
    print("</select><input type='submit' value='Mount'></form></pre></body></html>");
	
?>