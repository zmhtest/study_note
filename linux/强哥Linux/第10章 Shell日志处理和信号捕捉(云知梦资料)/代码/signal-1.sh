#!/bin/bash
#signal.sh
#信号捕捉

trap 'myfunc' 2

function myfunc(){
	echo '你正在按ctrl+c键，程序无法终止，抱歉!!!'
}

i=0

while :
do
	let i++
	echo $i
	sleep 1
done