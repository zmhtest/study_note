#!/bin/bash
#backup.sh

time=`date +%Y-%m-%d`
backdir="/mnt/${time}"
webdir="/usr/local/apache2/htdocs/myshop15"
back_webdir="${backdir}/web"
back_datadir="${backdir}/data"
mysql_conn="/usr/local/mysql/bin/mysqldump -uroot -p123 myshop15"

mkdir -p $backdir
mkdir -p $back_webdir
mkdir -p $back_datadir

rsync -r $webdir $back_webdir &>/dev/null
echo "web backup ok!"

$mysql_conn > "${back_datadir}/myshop15.sql" &>/dev/null
echo "data backup ok!"

zip -r "${backdir}.zip" $backdir &>/dev/null
echo "zip create ok!"

rm -rf $backdir
echo "srcdir remove ok!"

rsync -e ssh -a -z --compress-level=9 "${backdir}.zip" 192.168.20.1:/mnt
echo "rsync transfer ok!"
