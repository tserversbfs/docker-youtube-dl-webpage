#!/bin/bash
#
# This script will configure  linuxserver/docker-nginx
# to run as a youtube-dl docker.
#
# create, run, and stop the  linuxserver/docker-nginx 
# like such:
#
# UID=$(id -u) && GID=$(id -g)
# f_cfg=<location/folder/config>/ytdl #where to look for container config files
# f_dest=<location/folder/complete>/complete #where to look for downloaded content
#    docker create \
#        --name=ytdl \
#        --net=app_net \
#        -e PUID="${UID}" \
#        -e PGID="${GID}" \
#        -e TZ=Europe/Paris \
#        -v "${f_cfg}":/config \
#        -v "{f_dest}":/complete \
#        --restart unless-stopped \
#       ghcr.io/linuxserver/nginx 
#
#   docker start ytdl \
#       && sleep 120 \
#       && docker stop ytdl
#
# mkdir -p "${f_cfg}"/ytdl/custom-cont-init.d and
# place this file into the newly created folder.
#
# mkdir -p "${f_cfg}"/ytdl/custom-cont-init.d and
# place ytdl files into the newly create folder.
#
# Start the conainer.
#
#
#
_alter_files() {
    echo "*** Altering original container files. ***"
    echo "** Pointing nGinx to ytdl **"
    # * path for above: /config/nginx/site-confs/default 
    # * search for: /config/www;
    # * replace with: /config/custom-cont-init.d/www_ytdl
    #
    sed -i 's/\/config\/www;/\/config\/custom-cont-init.d\/www_ytdl;/g' /config/nginx/site-confs/default
    #
    echo "*** Stopping nGinx from buffing bash ***"
    # *fastcgi_buffering off;
    # * path for above include /etc/nginx/fastcgi_params;
    echo "fastcgi_buffering off;" >> /etc/nginx/fastcgi_params
    echo "*** Alterations Complete ***"
}
_install() {
    echo "*** Install Dependencies ***"
    ENV PYTHONUNBUFFERED=1
    echo "** Adding repositories **"
    echo "http://dl-cdn.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories
    echo "http://dl-cdn.alpinelinux.org/alpine/edge/main" >> /etc/apk/repositories
    echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
    echo "** Adding ffmpeg, rsync, updating python **"
    apk add --no-cache --upgrade ffmpeg ffmpeg-libs rsync python3 libacl musl popt
    echo "** Setting up python **"
    ln -sf python3 /usr/bin/python
    python3 -m ensurepip
    echo "** Installing Python setuptools **"
    pip3 install --no-cache --upgrade pip setuptools
    echo "** Installing youtube-dl in Python **"
    pip3 install --no-cache --upgrade youtube-dl
    echo "*** Install Complete ***"
}

[ ! -f "/init_complete" ] && _install
[ ! -f "/init_complete" ] && _alter_files
[ ! -d "/complete" ] && mkdir /complete
chown -R abc:abc /complete
echo "1" > /init_complete