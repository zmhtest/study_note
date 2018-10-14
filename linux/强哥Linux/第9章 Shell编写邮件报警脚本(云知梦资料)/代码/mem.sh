#!/bin/bash
#web.sh

use=`free -m|awk '{if(NR==2){print int($3*100/$2)}}'`
#tot=`free -m|awk '{if(NR==2){print $2}}'`
#per=$(($use*100/$tot))

if [ $use -lt 50 ];then
	str="mem space is less than 50%!!!"
else
	str="mem space is greater than 50%!!!"
fi

echo $str|mail -s 'linux server mem space' admin@lampym.com
