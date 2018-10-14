#!/bin/bash
#index.cgi

echo "content-type:text/html;charset=utf-8"
echo

echo $SERVER_SOFTWARE	
echo '<br>'
echo $SERVER_NAME
echo '<br>'
echo $SCRIPT_NAME
echo '<br>'
echo $REMOTE_ADDR
echo '<br>'
echo $QUERY_STRING
