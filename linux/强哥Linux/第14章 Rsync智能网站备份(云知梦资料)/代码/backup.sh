#!/bin/bash
#backup.sh

# 常用变量
time=`date +%Y-%m-%d`
backdir="/mnt/${time}"
webdir="/usr/local/apache2/htdocs/myshop15"
back_webdir="${backdir}/web"
back_datadir="${backdir}/data"
mysql_conn="/usr/local/mysql/bin/mysqldump -uroot -p123 myshop15"

# 创建目录
mkdir -p $backdir;
mkdir -p $back_webdir;
mkdir -p $back_datadir;

# 复制网站目录
rsync -r $webdir $back_webdir &>/dev/null
echo "web backup ok!"

# 导出数据库sql语句
$mysql_conn > "${back_datadir}/myshop15.sql" &>/dev/null
echo "data backup ok!"

# 目标目录压缩完成
zip -r "${backdir}.zip" $backdir &>/dev/null
echo "zip make ok!"

# 源目录删除完成
rm -rf $backdir
echo "backdir remove ok!"

# 把数据远程传输到Centos-B服务器指定目录下完成
rsync -e ssh -a -z --compress-level=9 "${backdir}.zip" 192.168.20.2:/mnt
echo "rsync transfer ok!"






