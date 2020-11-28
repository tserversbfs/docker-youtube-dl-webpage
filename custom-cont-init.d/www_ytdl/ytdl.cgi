#!/bin/bash
#

	source "${PWD}"/custom-cont-init.d/www_ytdl/inc/yt_header
	source "${PWD}"/custom-cont-init.d/www_ytdl/inc/postget.sh
	

#	echo '<div class="main">'

	echo '<div id="barDown" class="barDown"></div><div id="myProgress"><div id="myBar" class="myBar">Loading...</div></div><div id="barMsg"></div>'; ## Progess bar
#	echo '<br/><br/>'
    echo "<pre><p>"

OPTIONS=" --force-ipv4 --no-check-certificate --restrict-filenames  --no-call-home $( echo $1  | base64 -d )"

SUBFOLDER=$( echo $2  | base64 -d )
[ "${SUBFOLDER: 0: 1}" = "/" ] && SUBFOLDER="${SUBFOLDER: 1}"
[ "${SUBFOLDER: -1: 1}" = "/" ] && SUBFOLDER="${SUBFOLDER: 0: -1}"
[ "${#SUBFOLDER}" -gt 0 ] && SUBFOLDER="/$SUBFOLDER"

DIROUT="/complete"
DIRWORK="$PWD"
n_code=$(date +%6N)
to_folder="$DIROUT$SUBFOLDER" 
to_folder=$( echo $to_folder  | sed 's/[^a-zA-Z0-9]\/]/_/g' )
tmp_folder=$( echo $DIRWORK/.tmp/$n_code | sed 's/[^a-zA-Z0-9]\/]/_/g' )

mkdir -p "$to_folder"
mkdir -p "$tmp_folder"

echo "[Final file location] $to_folder<br/><br/>"
echo "[Temporary file location] $tmp_folder<br/><br/>"

sudo pip3 install --upgrade youtube-dl
	cd $DIRWORK
	/usr/bin/python -u /usr/bin/youtube-dl $OPTIONS -o "$tmp_folder"/'%(title)s.%(ext)s'; RET=$?
    partFile=$( find $tmp_folder -name "*.part" )
    [ "$RET" -gt "0" ] && echo "DOWNLOAD ERROR!<br/>" && echo "[Error] $RET<br/>"
    [ "$partFile" != "" ] && echo "PART FILE ERROR!<br/>" 
    rm -fr "$tmp_folder"/*.part;
    rm -fr "$tmp_folder"/*.ytdl;

[ "$RET" -le "0" ] && echo "[Complete]<br/>"
[ "$RET" -ge "1" ] && echo "[Complete] with errors.<br/>"

echo "<br>"
echo "[Moving files...] $to_folder/ <br/>"

rsync -PHACcviumaOq \
	--no-perms \
	--omit-dir-times \
	--copy-unsafe-links \
	--exclude="*~" \
	$tmp_folder/ $to_folder/; rsRET="$?"

[ "$rsRET" -ge "1" ] && echo "[Error] $rsRET<br/>"

echo "[Removing Temporary files]<br/>"
rm -fr "$tmp_folder"; [ "$?" -le "0" ] || echo "[Error] Removal failed."

echo "<br>"

[ "$RET" -le "0" ] && echo "Video(s) download completed successfully. <br/>"
[ "$RET" -ge "1" ] && echo "Error exists on download.<br/>"
[ "$rsRET" -ge "1" ] && echo "Error exists on file transfer.<br/>"

exit