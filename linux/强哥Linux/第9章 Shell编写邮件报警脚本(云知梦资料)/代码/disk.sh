#!/bin/bash
#web.sh

ds=`df|awk '{if(NR==3){print int($4)}}'`


if [ $ds -lt 45 ];then
	str="disk space is less than 45%!!!"
else
	str="disk space is greater than 45%!!!"
fi

echo $str|mail -s 'linux server disk space' admin@lampym.com