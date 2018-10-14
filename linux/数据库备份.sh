#!/bin/bash
#这是一个备份mysql数据库的脚本

BACKUPDIR=/data/mysql/`date +%Y-%m-%d`
USER=root
DB=test 

#判断是否为root用户
if [[ $UID -ne 0 ]]; then
	echo "permition denied"
	sleep 2
	exit 1
fi

#判断备份目录是否存在，如果不存在，则创建
if [[ ! -d $BACKUPDIR ]]; then
	mkdir -p $BACKUPDIR
fi

#开始备份
/usr/bin/mysqldump -u $USER -p123 -d $DB > $BACKUPDIR/web.sql

#打包备份的数据
cd $BACKUPDIR ; tar -zcvf web.sql.tar.gz *.sql

#删除原数据
find . -type f -name *.sql -exec rm -rf {} \;

#打印是否备份成功的信息
[ $? -eq 0 ] && echo "`date +%Y-%m-%d backup is success.`"

#删除30天以前的备份
cd $BACKUPDIR/../; find . -type d -mtime +30 | xargs rm -rf 

echo "the mysql backup is successfully!"