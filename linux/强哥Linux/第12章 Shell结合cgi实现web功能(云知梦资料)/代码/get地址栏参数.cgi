#!/bin/bash
#index.cgi

echo "content-type:text/html;charset=utf-8"
echo

#include html code
echo "<html>"
echo "<head>"
echo "<style>"
echo "*{font-family:微软雅黑}"
echo "</style>"
echo "</head>"
echo "<body>"
echo "<pre>"

qs=$QUERY_STRING
line=`echo $qs|sed 's/&/ /g'`

for loop in $line
do
	name1=`echo $loop|sed 's/=/ /g'|awk '{print $1}'`
	value1=`echo $loop|sed 's/=/ /g'|awk '{print $2}'|sed 's/+/ /g'|sed -e 's/%\(\)/\\\x/g'`
	str=`printf "${name1}='${value1}'"`
	eval $str
done
echo $name
echo $age

echo "</pre>"
echo "</body>"
echo "</html>"

