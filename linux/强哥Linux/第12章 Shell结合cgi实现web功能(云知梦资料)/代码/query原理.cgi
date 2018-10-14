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
echo $line

echo "</pre>"
echo "</body>"
echo "</html>"

index.cgi?user=%20+++%21&age=20
user %20+++%21

name1='user'
value1='\xA   \xB'
str="user=小   明"
user='小   明'
age=20
echo $user
echo $age

