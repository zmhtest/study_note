#!/bin/bash
#index.cgi

echo "content-type:text/html;charset=utf-8"
echo

echo '<pre>'
ifconfig eth0
echo '</pre>'
