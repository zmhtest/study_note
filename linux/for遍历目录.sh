#!/bin/sh
#打印/etc/下面的所有目录

for f in `ls /etc/`; do
	# echo "$f"
	if [[ -d "/etc/$f" ]]; then
			echo "/etc/$f"
	fi	
done

