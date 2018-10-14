#!/bin/bash
#monitor.sh

#------------web--------------
nc -w 3 localhost 80 &>/dev/null

if [ $? -eq 0 ];then
	str="apache web status Running!!!"
else
	str="apache web status Shuting!!!"
fi

echo $str|mail -s 'apache web server' admin@lampym.com

#------------mysql--------------
nc -w 3 localhost 3306 &>/dev/null

if [ $? -eq 0 ];then
	str="mysql status Running!!!"
else
	str="mysql status Shuting!!!"
fi

echo $str|mail -s 'mysql server' admin@lampym.com

#------------disk--------------
ds=`df|awk '{if(NR==3){print int($4)}}'`


if [ $ds -lt 45 ];then
	str="disk space is less than 45%!!!"
else
	str="disk space is greater than 45%!!!"
fi

echo $str|mail -s 'linux server disk space' admin@lampym.com

#------------mem--------------
use=`free -m|awk '{if(NR==2){print int($3*100/$2)}}'`

if [ $use -lt 50 ];then
	str="mem space is less than 50%!!!"
else
	str="mem space is greater than 50%!!!"
fi

echo $str|mail -s 'linux server mem space' admin@lampym.com