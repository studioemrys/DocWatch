#!/bin/sh
# Sep 13, 2017 at 22:00
# Studio Emrys

DocWatchInstall()
{
	echo "Verify installation of MySQL..."
	sleep 1
	type mysql >/dev/null 2>&1 || { 
		echo >&2 "MySQL is not installed..."
		sleep 2
		echo "Installation aborted"; 
		exit 1; 
	}
	echo "MySQL installation verified"
	sleep 1
	echo "Create DocWatch database in MySQL.."
	sleep 2
	echo "Please enter your MySQL database password"
	mysql -u root -p<docwatch.sql
}
clear
echo ""
echo "DOCWATCH INSTALLER"
echo ""
echo ""
while true; do
    read -p "Do you want to install DocWatch on your system? [Y/n]" jn
    case $jn in
        [Yy]* ) DocWatchInstall; break;;
        [Nn]* ) exit;;
        * )
    esac
done

