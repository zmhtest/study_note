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
ping 192.168.20.3
echo "</pre>"
echo "</body>"
echo "</html>"




