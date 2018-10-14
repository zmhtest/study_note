#!/bin/bash
#index.sh

. menu.sh

clear
menu

while true
do
	read -p "please input a option:" option

	case $option in
		1)
			read -p "add a user:" name
			useradd $name &>/dev/null

			if [ $? -eq 0 ];then
				str="user ${name} is created successfully!!!"
				echo -e "\033[30;47m$str\033[0m"
			else
				str="user ${name} is created failly!!!"
				echo -e "\033[31;47m$str\033[0m"
			fi
			;;
		2)
			read -p "input the user:" name
			read -p "set pass for the user:" pass
			echo $pass | passwd --stdin $name &>/dev/null

			if [ $? -eq 0 ];then
				str="${name}'s password is set successfully!!!"
				echo -e "\033[30;47m$str\033[0m"
			else
				str="${name}'s password is set failly!!!"
				echo -e "\033[31;47m$str\033[0m"
			fi
			;;	
		3)
			read -p "delete a user:" name
			userdel -r $name &>/dev/null

			if [ $? -eq 0 ];then
				str="user ${name} is deleted successfully!!!"
				echo -e "\033[30;47m$str\033[0m"
			else
				str="user ${name} is deleted failly!!!"
				echo -e "\033[31;47m$str\033[0m"
			fi
			;;
		4)
			str=`free -m`
			echo -e "\033[30;47m$str\033[0m"
			;;
		5)
			str=`df -Th`
			echo -e "\033[30;47m$str\033[0m"
			;;
		6)
			echo -e "\033[30;47mQuit successfully!!\033[0m"
			break
			;;
		7)
			clear
			menu
			;;
	esac
done