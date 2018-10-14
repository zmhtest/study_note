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

line=`echo $qs|sed 's/&/ /g'`
 
for loop in $line
do
	name1=`echo $loop|sed 's/=/ /g'|awk '{print $1}'`	
	value1=`echo $loop|sed 's/=/ /g'|awk '{print $2}'|sed 's/+/ /g'|sed -e 's/%\(\)/\\\x/g'`

	str=`printf "${name1}='${value1}'"`
	eval $str
done

echo $username
echo $password
echo $mess

echo "</pre>"
echo "</body>"
echo "</html>"