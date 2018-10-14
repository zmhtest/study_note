#!/bin/bash
#web.sh

nc -w 3 localhost 80 &>/dev/null

if [ $? -eq 0 ];then
	str="apache web status Running!!!"
else
	str="apache web status Shuting!!!"
fi

echo $str|mail -s 'apache web server' admin@lampym.com