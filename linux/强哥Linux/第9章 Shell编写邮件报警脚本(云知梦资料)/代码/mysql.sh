#!/bin/bash
#web.sh

nc -w 3 localhost 3306 &>/dev/null

if [ $? -eq 0 ];then
	str="mysql status Running!!!"
else
	str="mysql status Shuting!!!"
fi

echo $str|mail -s 'mysql server' admin@lampym.com