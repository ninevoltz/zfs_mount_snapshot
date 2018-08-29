<?php

    exec('TERM=xterm /usr/sbin/zfs list -t snapshot 2>&1', $results );
	$lines = count($results);
	
	
    print("<html><body><pre><h3>Mount or Diff ZFS snapshot</h3><br><b>               Name                        Used Avail Refer MountPoint</b><br>");
	
	print("<form method='POST' action='mount-zfs-snapshot.php'><b>Earliest snap: </b><select name='selected_snapshot1'><option value=''></option>");
	print("<option value = ''></option>");
	
	for ($line = 1; $line < $lines; $line +=1) {
		$snap = explode(' ', $results[$line]);
		print("<option value='$snap[0]'>$results[$line]</option>");
    }
	
	print("</select><input type='submit' value='Mount' name='action'><br><b>Latest snap:   </b><select name='selected_snapshot2'><option value=''></option>");

	for ($line = 1; $line < $lines; $line +=1) {
		$snap = explode(' ', $results[$line]);
		print("<option value='$snap[0]'>$results[$line]</option>");
    }
	
	print("</select><input type='submit' value='Diff' name='action'></form>");
	
	print("</pre></body></html>");
?>