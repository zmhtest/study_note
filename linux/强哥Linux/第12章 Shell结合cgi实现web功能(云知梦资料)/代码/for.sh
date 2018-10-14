#!/bin/bash
#for.sh

for user in `cat /etc/passwd|awk -F: '{print $1}'`
do
	echo $user
	sleep 0.2
done
