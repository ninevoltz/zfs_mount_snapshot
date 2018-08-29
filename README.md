# zfs_mount_snapshot
Mount a ZFS snapshot to browse and restore files or directories, using a web interface.

Just setup your machine with [ZFSonLinux](https://github.com/zfsonlinux/zfs/wiki/RHEL-and-CentOS) and install [zfs-auto-snapshots](https://github.com/zfsonlinux/zfs-auto-snapshot). 

Copy the php scripts to /var/www/html/.

Browse to http://localhost/zfs-mount/zfs.php

I also installed [syncoid](https://github.com/jimsalterjrs/sanoid) to allow me to backup my pool + snapshots to a USB drive.
