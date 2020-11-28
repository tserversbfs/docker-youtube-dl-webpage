<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Video Site Downloader</title>
    <link rel="stylesheet" type="text/css" href="./inc/view.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="view.js"></script>
    <script>
    function my_button_click_handler() {
        window.scrollTo(00, 00);
    }
    </script>
</head>

<body id="main_body">

    <img id="top" src="./inc/top.png" alt="">
    <div id="form_container">

        <h1><a>Video Site Downloader</a></h1>
        <form id="form_55620" name="form_55620" class="appnitro" method="post" action="./yt_results.php">
            <div class="form_description">
                <h2>Video Site Downloader</h2>
                <p>Pulls video from video streaming sites. Vidoes may be converted to various audio formats like MP3.
                </p>
                <p>Documentation: https://github.com/ytdl-org/youtube-dl/blob/master/README.md#options</p>
            </div>
            <ul>
                <li id="li_url">
                    <label class="description" for="element_url">Web Site URL</label>
                    <div>
                        <input id="element_url" name="element_url" class="element text" type="url" maxlength="255"
                            size="53" placeholder="https://www.vsite.com/watch?v=SUPDUDEHLSvtBWc" pattern="https://.*"
                            required />
                    </div>
                    <p class="guidelines" id="guide_url">
                        <large>Multiple URLs separted by space, and:
                            examples: https://www.vsite.com/watch?v=9A-SLVvtBWc <br>
                            https://www.vsite.com/playlist?list=PL13755C70BA91BD6E <br>
                            https://www.vsite.com/watch?v=RBumbq5yVrA&list=PLMC9KNkOIKKtPzgY-5rmhvj7fax8fdxoj</larg>
                    </p>
                </li>
                <li id="li_subf">
                    <label class="description" for="element_subf">Extra Subfolder(s) </label>
                    <div>
                        <input id="element_subf" name="element_subf" class="element text" size="53" type="text"
                            maxlength="150" value="/" pattern="^(/[^/ ]*)+/?$" placeholder="/Music or /Movies etc"
                            value="" />
                    </div>
                    <p class="guidelines" id="guide_subf"><small>Subfolders must start with '/'. Depth
                            like:/Music/Band/Yada is acceptiable too. Do not included spaces,[,],\ etc.</small></p>
                </li>
                <li class="buttons">
                    <input type="hidden" name="form_id" value="55620" />
                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit"
                        onclick="my_button_click_handler()" />
                    Results may take 5 to 20 mins depending of size of video.
                </li>
                <li class="section_break">
                    <h3>Extra Options:</h3>
                    <p></p>
                </li>
                <li id="li_1">
                    <label class="description" for="element_err">Options: </label>
                    <span>
                        <input id="element_err" name="element_err" class="element radio" type="radio"
                            value="--ignore-errors" checked="checked" />
                        <label class="choice" for="element_err">-i, --ignore-errors</label>
                        <input id="element_err" name="element_err" class="element radio" type="radio"
                            value="--abort-on-error" />
                        <label class="choice" for="element_err">--abort-on-error</label>
                    </span>
                    <p class="guidelines" id="guide_1"><small>Continue on download errors, for example to skip
                            unavailable videos in a playlist.
                            Abort downloading of further videos (in the playlist or the command line) if an error
                            occurs.</small></p>
                </li>
                <li id="li_8">
                    <label class="description" for="element_8">Geo Restriction: </label>
                    <span>
                        <input id="element_geo1" name="element_g1_v" class="element checkbox" type="checkbox"
                            value="--geo-bypass" checked="checked" />
                        <label class="choice" for="element_g1_r">--geo-bypass</label>
                        <input id="element_2_h" name="element_g2_h" class="element text" type="hidden"
                            value="--geo-bypass-country" />
                        <label class="description" for="element_g3">--geo-bypass-country (Country) </label>
                        <input id="element_2_v" name="element_g2_v" class="element text small" type="text"
                            maxlength="255" pattern="([A-Z]{2})" value="US" required />
                    </span>
                    <p class="guidelines" id="guide_g2_v"><small>Force bypass geographic restriction with explicitly
                            provided two-letter CAPITAL ISO 3166-2 country code. Default: US
                            More info: https://en.wikipedia.org/wiki/ISO_3166-2. --geo-bypass MUST be enabled for this
                            to work.</small></p>
                </li>
                <li class="section_break">
                    <h3>Video Selection:</h3>
                    <p></p>
                </li>
                <div id="playbox" style="background-color: #cfc ; padding: 10px; border: 1px solid green;">
                    <li id="li_16">
                        <label class="description" for="element_16">Is URL a playlist or not?</label>
                        <span>
                            <input id="element_16_1" name="element_16" class="element radio" type="radio"
                                value="--no-playlist" checked="checked" />
                            <label class="choice" for="element_16_n">--no-playlist</label>
                            <input id="element_16_2" name="element_16" class="element radio" type="radio"
                                value="--yes-playlist" />
                            <label class="choice" for="element_16_y">--yes-playlist</label>
                        </span>
                        <p class="guidelines" id="guide_16"><small>--no-playlist Download only the video, if the URL
                                refers to a video and a playlist.
                                --yes-playlist Download the playlist, if the URL refers to a video and a
                                playlist.</small></p>
                    </li>
                    <li id="li_3">
                        <label class="description" for="element_16_1">--playlist-start (NUMBER) </label>
                        <div>
                            <input id="element_16_1_h" name="element_16_1_h" class="element text" type="hidden"
                                value="--playlist-start" />
                            <input id="element_16_1_v" name="element_16_1_v" class="element text medium" type="text"
                                maxlength="255" pattern="([0-9]{1,})" value="" />
                        </div>
                        <p class="guidelines" id="element_16_1"><small>(Optional) Playlist video to start at (default is
                                1). --yes-playlist MUST be enabled.</small></p>
                    </li>
                    <li id="li_5">
                        <label class="description" for="element_16_2">--playlist-end (NUMBER) </label>
                        <div>
                            <input id="element_16_2_h" name="element_16_2_h" class="element text" type="hidden"
                                value="--playlist-end" />
                            <input id="element_16_2_v" name="element_16_2_v" class="element text medium" type="text"
                                maxlength="255" pattern="([0-9]{1,})" value="" />
                        </div>
                        <p class="guidelines" id="element_16_2"><small>(Optional) Playlist video to end at (default is
                                last). --yes-playlist MUST be enabled.</small></p>
                    </li>
                    <li id="li_6">
                        <label class="description" for="element_16_3">--playlist-items (ITEM_SPEC) </label>
                        <div>
                            <input id="element_16_3_h" name="element_16_3_h" class="element text" type="hidden"
                                value="--playlist-items" />
                            <input id="element_16_3_v" name="element_16_3_v" class="element text medium" type="text"
                                maxlength="255" pattern="([0-9,-]{1,})" value="" />
                        </div>
                        <p class="guidelines" id="guide_16_3"><small>(Optional) Playlist video items to download.
                                Specify indices of the videos in the playlist separated by commas like:
                                "--playlist-items 1,2,5,8" if you want to download videos indexed 1, 2, 5, 8 in the
                                playlist. You can specify range: "--playlist-items 1-3,7,10-13", it will
                                download the videos at index 1, 2, 3, 7, 10, 11, 12 and 13. --yes-playlist MUST be
                                enabled.</small></p>
                    </li>
                    <li id="li_12">
                        <label class="description" for="element_12">--match-title (REGEX) </label>
                        <div>
                            <input id="element_16_4_h" name="element_16_4_h" class="element text" type="hidden"
                                value="--match-title" />
                            <input id="element_16_4_v" name="element_16_4_v" class="element text medium" type="text"
                                maxlength="255" value="" />
                        </div>
                        <p class="guidelines" id="guide_16_4"><small>(Optional) Download only matching titles (regex or
                                caseless sub-string). --yes-playlist MUST be enabled.</small></p>
                    </li>
                    <li id="li_11">
                        <label class="description" for="element_11">--reject-title (REGEX) </label>
                        <div>
                            <input id="element_16_5_h" name="element_16_5_h" class="element text" type="hidden"
                                value="--reject-title" />
                            <input id="element_16_5_v" name="element_16_5_v" class="element text medium" type="text"
                                maxlength="255" value="" />
                        </div>
                        <p class="guidelines" id="guide_16_5"><small>(Optional) Skip download for matching titles (regex
                                or caseless sub-string). --yes-playlist MUST be enabled.</small></p>
                    </li>
                    <li id="li_13">
                        <label class="description" for="element_13">--max-downloads NUMBER </label>
                        <div>
                            <input id="element_16_6_h" name="element_16_6_h" class="element text" type="hidden"
                                value="--max-downloads" />
                            <input id="element_16_6_v" name="element_16_6_v" class="element text medium" type="text"
                                maxlength="255" pattern="([0-9]{1,})" value="" />
                        </div>
                        <p class="guidelines" id="guide_16_6"><small>(Optional) Abort after downloading NUMBER files.
                                --yes-playlist MUST be enabled.</small></p>
                    </li>
                </div>
                <li class="section_break">
                    <h3>Additional Options:</h3>
                    <p></p>
                <li id="li_14">
                    <label class="description" for="element_14">--min-filesize SIZE </label>
                    <div>
                        <input id="element_10_1_h" name="element_10_1_h" class="element text" type="hidden"
                            value="--min-filesize" />
                        <input id="element_10_1_v" name="element_10_1_v" class="element text medium" type="text"
                            maxlength="255" pattern="([0-9]{1,}[K|k|M|m|G|g])" value="" />
                    </div>
                    <p class="guidelines" id="guide_10_1"><small>(Optional) Do not download any videos smaller than SIZE
                            (e.g. 50k or 44.6m).</small></p>
                </li>
                <li id="li_15">
                    <label class="description" for="element_15">--max-filesize SIZE </label>
                    <div>
                        <input id="element_10_2_h" name="element_10_2_h" class="element text" type="hidden"
                            value="--max-filesize" />
                        <input id="element_10_2_v" name="element_10_2_v" class="element text medium" type="text"
                            maxlength="255" "([0-9]{1,}[K|k|M|m|G|g])" value="" />
                    </div>
                    <p class="guidelines" id="guide_10_2"><small>(Optional) Do not download any videos larger than SIZE
                            (e.g. 50k or 44.6m).</small></p>
                </li>
                <li class="section_break">
                </li>
                <li id="li_30">
                    <label class="description" for="element_30">Options from documentation</label>
                    <div>
                        <input id="element_opt" name="element_opt" class="element text" size="53" type="text"
                            maxlength="255" placeholder="-k --playlist-reverse --playlist-random "
                            pattern="([a-zA-Z0-9- ]{2,})" value="" />
                    </div>
                    <p class="guidelines" id="guide_opt"><small>See Documenation URL listed at top. Alpha-numeric, space
                            and dash only!</small></p>
                </li>
                <li class="section_break">
                    <h3>Post-processing Options:</h3>
                    <p></p>
                </li>
                <li id="li_18">
                    <label class="description" for="element_18"> </label>
                    <span>
                        <input id="element_xaud" name="element_xaud" class="element checkbox" type="checkbox"
                            value="--extract-audio" />
                        <label class="choice" for="element_xaud">--extract-audio</label>
                    </span>
                    <p class="guidelines" id="guide_xaud"><small>Convert video files to audio-only files. Requires
                            --audio-format (below) A copy of the video file will NOT be provided unless "-k"(no quotes)
                            is added to Options from documentation, above. </small></p>
                </li>
                <li id="li_19">
                    <label class="description" for="element_audF">--audio-format FORMAT </label>
                    <div>
                        <input id="element_audf_h" name="element_audf_h" class="element text" type="hidden"
                            value="--audio-format" />
                        <select class="element select medium" id="element_audf_v" name="element_audf_v">
                            <option value="best" selected="selected">best</option>
                            <option value="aac">aac</option>
                            <option value="flac">flac</option>
                            <option value="mp3">mp3</option>
                            <option value="m4a">m4a</option>
                            <option value="opus">opus</option>
                            <option value="vorbis">vorbis</option>
                            <option value="wav">wav</option>
                        </select>
                    </div>
                    <p class="guidelines" id="guide_audf"><small>Specify audio format. No effect without -x
                            (above)</small></p>
                </li>
                <li id="li_20">
                    <label class="description" for="element_audq_h">--audio-quality QUALITY </label>
                    <div>
                        <input id="element_audq_h" name="element_audq_h" class="element text" type="hidden"
                            value="--audio-quality" />
                        <select class="element select small" id="element_audq_h" name="element_audq_v">
                            <option value="0" selected="selected">0 (better)</option>
                            <option value="5">5</option>
                            <option value="9">9 (worse)</option>
                        </select>
                    </div>
                    <p class="guidelines" id="guide_audq_h"><small>Specify ffmpeg/avconv audio quality, insert a value
                            between 0 (better) and 9 (worse).</small></p>
                </li>
                <li id="li_21">
                    <label class="description" for="element_rvf">--recode-video FORMAT </label>
                    <div>
                        <input id="element_rvf_h" name="element_rvf_h" class="element text" type="hidden"
                            value="--recode-video" />
                        <select class="element select small" id="element_rvf_v" name="element_rvf_v">
                            <option value="" selected="selected">Default</option>
                            <option value="mp4">mp4</option>
                            <option value="flv">flv</option>
                            <option value="ogg">ogg</option>
                            <option value="webm">webm</option>
                            <option value="mkv">mkv</option>
                            <option value="avi">avi</option>
                        </select>
                    </div>
                    <p class="guidelines" id="guide_rvf"><small>Encode the video to another format if necessary</small>
                    </p>
                </li>
            </ul>
        </form>
        <div id="footer">
        </div>
    </div>
    <img id="bottom" src="./inc/bottom.png" alt="">
</body>

</html>