#!/bin/bash
#signal.sh
#信号捕捉
#与用户发生交互

trap 'myfunc' 2

function myfunc(){
	read -p '您确定终止该进程吗？yes or no: ' s

	case $s in
		'yes')
			exit;
			;;

		'no')
			;;

		*)
			myfunc	
			;;
	esac
}

i=0

while :
do
	let i++
	echo $i
	sleep 1
done