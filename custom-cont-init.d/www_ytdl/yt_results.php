<!doctype html>
<?php $title = 'File Conversion'; ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./inc/view.css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    onload = "window.top.scrollTo(0,0);" //Refers to the top main window (page)
    onload = "window.parent.scrollTo(0,0);" //Refers to the immediate parent window (page)
    onload = "window.parent.parent.scrollTo(0,0);" //Refers to the parent of parent window (page)
    </script>
    <title>$title</title>
    <style>
    p {
        color: #f85c22;
        padding: 0px 0px 0px 0px;
        text-decoration: none;
        font-size: 12px;
        text-align: left;
    }

    pre {
        color: #f85c22;
        padding: 0px 0px 0px 0px;
        text-decoration: none;
        font-size: 12px;
        width: 80%;
        background-color: #303030
    }

    title {
        color: #f85c22
    }

    h1 {
        color: #f85c22
    }

    h2 {
        color: #f85c22
    }

    h3 {
        color: #f85c22
    }

    h4 {
        color: #f85c22
    }

    div {
        color: #f85c22
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #353535;
        width: 90%;
    }

    .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
        font-size: 20px;
    }

    .sidenav a {
        padding: 6px 6px 6px 6px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        background-color: #111;
    }

    .sidenav a:hover {
        color: #f1f1f1;
        font-size: 20px;
    }

    .main {
        margin-left: 80px;
        font-size: 14px;
        padding: 0px 10px;
    }

    .itemf {
        position: absolute;
        left: 6px;
        top: 220px;
        margin-left: 200px;
        background-color: #353535;
        opacity: 1.0;
    }

    tbody {
        position: static;
    }

    #myProgress {
        // position: absolute; left: 6px; top: 250px;
        width: 80%; // 62%
        background-color: #ddd;
        border: 1px solid #ccc;
        //  margin-left: 200px;
        white-space: nowrap;
    }

    .myBar {
        width: 0%;
        height: 20px;
        background-color: #4CAF50;
        border: 1px solid #ccc;
        text-align: left;
        line-height: 20px;
        color: white;
        white-space: nowrap;
    }

    #barDown {
        //margin-left: 200px;
        //position: absolute; left: 6px; top: 223px;
        width: 0%;
        height: 20px;
        background-color: #4CAF50;
        text-align: center;
        line-height: 20px;
        color: white;
        white-space: nowrap;
    }

    #barMsg {
        width: 100%;
        height: 20px;
        text-align: left;
        line-height: 20px;
        color: white;
    }
    </style>
</head>

<body class="main" style="background-color: #353535;">
    <title>$title</title>
    <!-- <form><input type="button" value="Return" onclick="history.back()"></form> -->

    <body style="background-color: #353535;">
        <p>
            <?php // THE MEAT //
//
// var_dump($_POST);
$str = test_input($_POST['element_err']);
if (isset($_POST["element_g1_v"]))  {

    $tmp = (isset($_POST["element_g2_v"])) ? $_POST["element_g1_v"]." ".$_POST["element_g2_h"]." ".$_POST["element_g2_v"] : "";
    $str = $str." ".$tmp;
}
if (($_POST['element_16']) == "--yes-playlist") { 
    $str = $str." ".test_input($_POST['element_16']);
    $tmp = (isset($_POST["element_16_1_v"])) ? test_input($_POST["element_16_1_h"])." ".test_input($_POST["element_16_1_v"]) : "";
    $str = $str." ".$tmp;
    $tmp = (isset($_POST["element_16_2_v"])) ? test_input($_POST["element_16_2_h"])." ".test_input($_POST["element_16_2_v"]) : "";
    $str = $str." ".$tmp;
    $tmp = (isset($_POST["element_16_3_v"])) ? test_input($_POST["element_16_3_h"])." ".test_input($_POST["element_16_3_v"]) : "";
    $str = $str." ".$tmp;
    $tmp = (isset($_POST["element_16_4_v"])) ? test_input($_POST["element_16_4_h"])." ".test_input($_POST["element_16_4_v"]) : "";
    $str = $str." ".$tmp;
    $tmp = (isset($_POST["element_16_5_v"])) ? test_input($_POST["element_16_5_h"])." ".test_input($_POST["element_16_5_v"]) : "";
    $str = $str." ".$tmp;
    $tmp = (isset($_POST["element_16_6_v"])) ? test_input($_POST["element_16_6_h"])." ".test_input($_POST["element_16_6_v"]) : "";
    $str = $str." ".$tmp;
} 
$tmp = (is_null($_POST["element_10_1_v"])) ? test_input($_POST["element_10_1_h"])." ".test_input($_POST["element_10_1_v"]) : "";
$str = $str." ".$tmp;
$tmp = (is_null($_POST["element_10_2_v"])) ? test_input($_POST["element_10_2_h"])." ".test_input($_POST["element_10_2_v"]) : "";
$str = $str." ".$tmp;
$str = $str." ".test_input($_POST["element_opt"]);
$str = $str." ".test_input($_POST["element_xaud"]);
$tmp = (isset($_POST["element_audf_v"])) ? test_input($_POST["element_audf_h"])." ".test_input($_POST["element_audf_v"]) : "";
$str = $str." ".$tmp;
$tmp = (isset($_POST["element_audq_v"])) ? test_input($_POST["element_audq_h"])." ".test_input($_POST["element_audq_v"]) : "";
$str = $str." ".$tmp;
$tmp = (is_null($_POST["element_rvf_v"])) ? test_input($_POST["element_rvf_h"])." ".test_input($_POST["element_rvf_v"]) : "";
$str = $str." ".$tmp;
// base64_encode ( string $data ) 
$e_u = test_input($_POST['element_u']);
$e_subf = base64_encode ( test_input($_POST['element_subf']));
$e_url = test_input($_POST['element_url']);
$str = $str." ".$e_url;
$str = base64_encode ( $str );
$e_dest = base64_encode ( test_input($_POST["element_dest"]));
//
while (@ ob_end_flush()); // end all output buffers if any
    // $cmd = "/usr/bin/unbuffer /srv/cgi/yt_results.cgi $str $username"; 
    $cmd = "stdbuf -i0 -o0 ./ytdl.cgi $str $e_dest $e_subf $e_u";
	$proc = popen($cmd, 'r');
	while (!feof($proc)) {	
    	// Progress Bar
		$buffer = fread($proc, 4096);
    	$array = preg_split("/\r\n|\n|\r/", $buffer);
//
    	foreach ($array as $value) {
            // Statistics for downloaded file.
            // echo "TEST: $value <br>";
//'[K[download]'
            if ( strpos( $value, '[download]' ) !== false ) {
				$words = preg_split('/\s+/', $value); // [K[download]   0.0% of 113.01MiB at 56.39KiB/s ETA 34:18 // "/[\s,]+/"
            	$rawPercent = $words[1];
            	$rawSize = $words[3];
            	$dimSize = substr($rawSize, -3, 3); // MiB
            	$rawSpeed = $words[5]; 
            	$dimSpeed = substr($rawSpeed, -5, 5); // KiB/s
            	
    //
	// 'Unknown'
				if ( strpos( $value, 'Unknown' ) !== false ) {
            		continue;  // If the word 'Unknown apears someplace GTFO'                                            
            	}
	// 'in'
	// 'in' means that the stream has finished. 
	// If stream is Video, then prepare for Audio
	// If stream is Audio, then we are finished.
                if ( $words[4] == 'in' ) {
                    if ($isFinalPart == 0) { // 0=video, video complete
                        $realSize = floatval(str_replace("~","",$rawSize));
                        $isFinalPart = 1;
                        $avg_arr = (array)[]; // clear array
                        continue;
                    } 
                    if ($isFinalPart == 1) { // 1=audio, audio complete
                        $percent = 100;
                    	unset($downloadSec);
                        unset($lastTime); // clear value incase another file is processed.
                        $estTime = "Complete";
                        $realSize = $realSize + floatval(str_replace("~","",$rawSize));
                        $totalTime = time() - $totalTime;
                        _update_progress_bar($bar_ID, $percent, intval($estSize) . $dimSize, $estTime);
                        continue;
                    }
                }
	//
    //
    // percent and size calculation
            	if ( $isFinalPart == 1 ){ 
            // $realSize is video portion. or 0 if audio only
                	$estSize = ( $realSize + floatval(str_replace("~","",$rawSize)));
            // last 20% is audio portion.
                	$percent = ( 80 + 0.20 * floatval($rawPercent) );
                } else { // this is the Video portion
            // over estimate file size to account for audio portion.
                	$estSize = ( 1.20 * floatval(str_replace("~","",$rawSize)));  
            // first 80% is video portion
                	$percent = ( 0.80 * floatval($rawPercent) ); 
                }
        		_update_progress_bar($bar_ID, $percent, intval($estSize) . $dimSize, $estTime);
    //
	// calculate average dload speed.
                if ( $words[4] == 'at' ) {  
                	if ( time() >= $bar_delay ){ // updates the speed progress once ever second.
                    	$bar_delay = microtime(true) + 1;
                    	for ( $i=10; $i>0; $i-- ) { 
                        	//echo $i+1 . " = $i <br/>";
                        	if ( isset($estTimeAverage[$i-1]) ) {
								$estTimeAverage[$i] =  $estTimeAverage[$i-1];                           
                            }
                        	if ( isset($speedAverage[$i-1]) ) {
								$speedAverage[$i] =  $speedAverage[$i-1];                           
                            }
                        }
                    //
                    	if ( ! isset($lastTime) ) {
                        	$lastTime = microtime(true) + 1; // init timer for speed.                          
                        }
                		$average = ( $estSize * $percent * 0.01 ) / ( time() - $totalTime );
                        $speed = 0.01 * ( $percent - $lastPercent ) * $estSize / ( microtime(true) - $lastTime ); 
                    	$speedAverage[0] = $speed;
                    	$estTime = intval( 0.01 * $estSize * ( 100 - $percent ) / ( array_sum($speedAverage)/count($speedAverage) ) );
                    	$lastPercent = $percent;
                    	$lastTime = microtime(true);
                    	// if ($estTime > 20000 ){ $estTime = 300; }
                    	$estTimeAverage[0] = $estTime;
                    	// $estTime = array_sum($estTimeAverage)/count($estTimeAverage);
                 		if ( $estTime < 120 ){
                			$estTime = round($estTime,0) . " s";
                		} elseif ( $estTime < 600 ) {
                			$estTime = (($min=floor($estTime/60))<10?"0":"") . $min . ':' . (($sec=$estTime%60)<10?"0":"") . $sec . " m:s";
                		} else {
                        	$estTime = (($min=floor($estTime/60))<10?"0":"") . $min . " minutes";
                        }
                    	if ( $average < 0.75 ){
                        	$average = round(1000 * $average,0);
                        	$speed = round(1000 * $speed,0);
                        	$dimSize = "KiB";
                        } else {
                        	$average = number_format(round($average, 3),3); // number_format($number, 2);
                        	$speed = number_format(round($speed, 3),3);
                        	$dimSize = "MiB";
                        }
                    	if ( $speed < 0 ){ $speed = 0; }
                    	_update_progress_barSpeed($barSpeed_ID, "Average: " . $average . $dimSize . "/s Speed: " . $speed . $dimSize . "/s");
                    }
					continue;
                }
            }
//            
//'[download]'
//INIT variable 
//set file name to "above BAR"
        	if ( strpos( $value, '[download]' ) !== false ) { 
            	if ( ! isset($downloadSec) ) { 
                	$downloadSec = 1;
                	$avg_arr = (array)[]; // clear array
            		$average = 0;
            		$speed = 0;
					$bar_ID="myBar";
					$barTitle_ID = "barDown";
					$barSpeed_ID = "barMsg";
            		if ( $element_18_1 == "--extract-audio" ){
						$isFinalPart = 1; // audio only;
					} else {
						$isFinalPart = 0; // video
					}
            		$totalTime = time();
                	$realSize = 0;
            		$estSize = 0;
					$percent = 0; 
					$estSize = 0;
					$estTime = "0 s";
            		// _update_progress_barTitle($barTitle_ID, " ");
					//_update_progress_bar($bar_ID, $percent, $estSize, $estTime);
				//	_update_progress_barSpeed($barSpeed_ID, "Average: " . round ( 0 , 3) . "MiB/s Speed: " . 0);   
                	$fileName = str_replace(array("\r", "\n","<br/>"), '', substr(strrchr($value, "/"), 1) );
                	if (substr($fileName, -4,1) == "." ) { $fileName = substr($fileName, 0,-9);}
                    if (substr($fileName, -5,1) == "." ) { $fileName = substr($fileName, 0,-10);}
                    $fileName = $fileName . $fileExt;
                	_update_progress_barTitle($barTitle_ID, $fileName);
                }
            	continue;
            }
//
// "[Temporary file location] $tmp_folder<br/>
			if ( strpos( $value, '[Temporary file location]' ) !== false ) {
                $tempFolderPath  = str_replace(array("\r", "\n","<br/>"), '', substr($value,26));
                continue;
            }
//        	
// [Complete]
			if ( strpos( $value, '[Complete]' ) !== false ) {
            	$value = str_replace(array("\r", "\n","<br/>"), '', $value);
                $actualSize = ( filesize($tempFolderPath . "/" . $fileName) / 1048576);
                //echo "<br/>[Complete] Calculated: " . $realSize . $dimSize . " Actual: " . round($actualSize,0) . "MiB in: " . $totalTime . " seconds.<br/>";
            	if ($actualSize < (0.80 * $realSize)){ 
                	echo "[Error] File size discrepency. Verify file(s): $fileName<br/>";
                	?><script type="text/javascript">
            var elem = document.getElementById("<?php echo $bar_ID; ?>");
            elem.style.backgroundColor = 'red';
            </script><?php
                }
            	continue;
            }
//         
// [Error] // turn bar red on error
			if ( strpos( $value, '[Error]' ) !== false ) {
				?><script type="text/javascript">
            var elem = document.getElementById("<?php echo $bar_ID; ?>");
            elem.style.backgroundColor = 'red';
            </script><?php
            }
//
// [ffmpeg] // used to get extention. $fileExt
			if ( strpos( $value, '[ffmpeg]' ) !== false ) {
            	if (substr($value, -5,1) == "." ) { $fileExt = substr($value, -5,4); }
            	if (substr($value, -6,1) == "." ) { $fileExt = substr($value, -6,5); }
                $fileName = $fileName . $fileExt;
                echo "[File Name] $fileName<br/>";
            }
//
//
//echo everything else
        	$value = str_replace(array("\r", "\n","<br/>"), '', $value);
        	if ( strstr($value, PHP_EOL) ) {
        		echo "$value"; // if there is an EOL then just echo it.
        	} elseif( strlen($value) >= 2 ) { // if it is too short, just skip it. ie space
        		if ( strpos( $value, '<h' ) !== false ) {
                	echo "$value"; // if html text just echo it.
                } else {
            		echo "$value<br/>"; // add EOL since there isnt one.
                }
        	} 
        }
	@ flush();
	}
//
//
//
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
// 
function _update_progress_bar($bar_ID, $percent, $estSize, $estTime) {
	?><script type="text/javascript">
            var elem = document.getElementById("<?php echo $bar_ID; ?>");
            var width = "<?php echo $percent; ?>";
            var estsize = "<?php echo $estSize; ?>";
            var esttime = "<?php echo $estTime; ?>";
            elem.style.width = width + '%';
            elem.innerHTML = Math.round(width) + '% Est.Size: ' + estsize + ' remaining: ' + esttime;
            </script><?php
	return 0;
} // END OF update_progress_bar()
function _update_progress_barTitle($barTitle_ID, $barTitle) {
	// echo "BT: ##$barTitle##<br/>";
	?><script type="text/javascript">
            var elem = document.getElementById("<?php echo $barTitle_ID; ?>");
            var bartitle = "<?php echo $barTitle; ?>";
            elem.innerHTML = bartitle;
            </script><?php
	return 0;
} // END OF update_progress_bar()
function _update_progress_barSpeed($barSpeed_ID, $barSpeed) {
	// echo "BT: ##$barTitle##<br/>";
	?><script type="text/javascript">
            var elem = document.getElementById("<?php echo $barSpeed_ID; ?>");
            var barspeed = "<?php echo $barSpeed; ?>";
            elem.innerHTML = barspeed;
            </script><?php
	return 0;
} // END OF update_progress_bar()
?>
            <!-- <form><input type="button" value="Return" onclick="history.back()"></form> -->