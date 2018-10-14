#!/bin/bash
#index.cgi

echo "content-type:text/html;charset=utf-8"
echo

echo "<html>"
echo "<head>"
echo "<style>"
echo "*{font-family:微软雅黑}"
echo "</style>"
echo "</head>"
echo "<body>"

echo "<form action='code.cgi' method='post'>"
	echo "<p>Shell命令:</p>"
	echo "<p><input type='text' name='code' size='100'></p>"
	echo "<p><input type='submit' value='提交'> <input type='reset' value='取消'></p>"
echo "</form>"

echo "</body>"
echo "</html>"
