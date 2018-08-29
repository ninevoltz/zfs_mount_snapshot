# zfs_mount_snapshot
Mount a ZFS snapshot to browse and restore files or directories, using a web interface.

Just setup your machine with [ZFSonLinux](https://github.com/zfsonlinux/zfs/wiki/RHEL-and-CentOS) and install [zfs-auto-snapshots](https://github.com/zfsonlinux/zfs-auto-snapshot). 

Copy the php scripts to /var/www/html/.

Browse to http://localhost/zfs-mount/zfs.php

I also installed [syncoid](https://github.com/jimsalterjrs/sanoid) to allow me to backup my pool + snapshots to a USB drive.

You will need to edit /usr/lib/systemd/httpd.service and comment out the line #PrivateTmp=true and add the apache user to sudoers for the mount command to work. If you know of a more secure way to run mount from PHP:exec(), please let me know.

Add the syncoid-daily script to crontab to make backups to a USB drive. Edit the script to change your pool name and the USB drive ID.
