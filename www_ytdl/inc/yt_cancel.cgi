#!/bin/bash
#
cd /tmp
if [ "$1" != "" ];
then
#	echo "1 = $1"
#    echo "2 = $2"
    username=$2
	title="Video Site DLer"
	# from interfece.php via form2.html
	cgi_dir="/srv/cgi" # "${cgi_dir}"
	source "${cgi_dir}"/postget.sh
    #source /opt/system_library.sh
	#env | sort; echo;echo
	REQUEST_METHOD=POST 
	len="QUERY_STRING_POST="
	len="${#len}"
	QUERY_STRING_POST="${1:$len}"
	#echo "QUERY_STRING_POST=$QUERY_STRING_POST"
    cgi_getvars POST ALL
    echo; echo
	#env | sort;echo;echo
else
	username="test"
	[ ! "$REMOTE_USER" == "" ] && username="$REMOTE_USER"
	echo 'Content-type: text/html'
	echo ""
	echo ""
	cgi_dir="/srv/cgi" # "${cgi_dir}"
	source "${cgi_dir}"/yt_header
	source "${cgi_dir}"/postget.sh
	title="Video Site DLer"
	#source /opt/system_library.sh
	#
	# Call to set QUERY_STRING to variables
	cgi_getvars GET ALL
	echo '<div class="main">'
fi
#
	echo "<h1>Video Site Downloader for $username</h1>"
    echo "<pre><p>"
    echo "Preparing to cancel download."
    echo "" #   
#
#
# RETURN button
# echo "<form><input type=\"button\" value=\"Return\" onclick=\"history.go(-2)\"></form>"
#
#
# Find the process ID
#echo "n_code=$n_code len = ${#n_code}" #identifies the process that needs to be killed
[ "${#n_code}" -eq "6" ] && echo "The reference code of $n_code is valid."
echo "Searching for process with $n_code..."
str=$( ps aux | grep  -i $n_code | awk '{ print $11,$2 }'); #Process name and PID
#echo "str = $str, len = ${#str}"; 
position=$( echo $str | awk '{print match($0, "python")}' ); # finds the PID
#echo "pos = $position, " $( [ "$position" -gt "0" ] )
[ "$position" -eq "0" ] && echo "Process NOT FOUND, exit" && echo "</pre></p>" && exit # 0 means it wasnt found
pid="$( echo ${str##*python} |  awk '{ print $1}' )" #Captures the PID
[ "$pid" -gt 0 ] && echo "Process $pid with reference $n_code has been found."
#
# Find the save FOlder for the process
# 
echo; echo
echo "Finding the temporary save folder:"
str=$( ps aux | grep  -i $n_code ) # Needed to know which folder the files is saved into
# echo "str = $str, len = ${#str}"; 
position=$( echo $str | awk '{print match($0, "syncthing")}' ); # which folder?
[ "$position" -gt "0" ] && tmp_folder="/home/$username/files/syncthing/_ignore/$n_code"
#echo "pos = $position"
position=$( echo $str | awk '{print match($0, "MediaPlayer")}' ); # which folder?
[ "$position" -gt "0" ] && tmp_folder="/home/$username/files/MediaPlayer/_ignore/$n_code"
#echo "pos = $position"
echo "temp folder = $tmp_folder"
[ "$tmp_folder" == "" ] && echo "Temp folder is empty, very odd. exit" && echo "</pre></p>" && exit 
[ ! -d "$tmp_folder" ] && echo "Temp folder does not exist. very odd. exit" && echo "</pre></p>" && exit 
echo "The folder $tmp_folder is valid."
#
#Kill the Process
#
echo; echo
process=$( ps -fp $pid )
echo "About to kill process: ${pid}/${n_code}"
kill -9 $pid; RET=$?
[ "$RET" -lt "1" ] && echo "Process killed successfully $RET" || echo "Process kill failed $RET"
process=$( ps -fp $pid )
echo "Kill verification ..."
[ "${#process}" -lt 60 ] && echo "Process killed successfully ${#process},$RET" || echo "Process kill failed ${#process},$RET"
#
# RETURN button
#
#echo "<form><input type=\"button\" value=\"Return\" onclick=\"history.go(-2)\"></form>"
echo "</pre></p>"


