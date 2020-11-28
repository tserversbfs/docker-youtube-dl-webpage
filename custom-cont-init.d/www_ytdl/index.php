<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./inc/form_loader.css">
    <link href="https://fonts.googleapis.com/css?family=QuickSand:500" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="./inc/view.js"></script>
    <script type="text/javascript">
    function tog_p1() {
        hide_all_p();
        var x = document.getElementById("fpage1");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage1");
        x.className = 'active';
    }

    function tog_p2() {
        hide_all_p();
        var x = document.getElementById("fpage2");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage2");
        x.className = 'active';
    }

    function tog_p3() {
        hide_all_p();
        var x = document.getElementById("fpage3");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage3");
        x.className = 'active';
    }

    function tog_p4() {
        hide_all_p();
        var x = document.getElementById("fpage4");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage4");
        x.className = 'active';
    }

    function tog_p5() {
        hide_all_p();
        var x = document.getElementById("fpage5");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage5");
        x.className = 'active';
    }

    function tog_p6() {
        hide_all_p();
        var x = document.getElementById("fpage6");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage6");
        x.className = 'active';
    }

    function tog_p7() {
        hide_all_p();
        var x = document.getElementById("fpage7");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage7");
        x.className = 'active';
    }

    function tog_p8() {
        hide_all_p();
        var x = document.getElementById("fpage8");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage8");
        x.className = 'active';
    }

    function tog_p9() {
        hide_all_p();
        var x = document.getElementById("fpage9");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage9");
        x.className = 'active';
    }

    function tog_p10() {
        hide_all_p();
        var x = document.getElementById("fpage10");
        x.style.visibility = 'visible';
        var x = document.getElementById("mpage10");
        x.className = 'active';
    }

    function hide_all_p() {
        document.getElementById("fpage1").style.visibility = 'hidden';
        document.getElementById("mpage1").classList.remove('active');
        document.getElementById("fpage2").style.visibility = 'hidden';
        document.getElementById("mpage2").classList.remove('active');
        document.getElementById("fpage3").style.visibility = 'hidden';
        document.getElementById("mpage3").classList.remove('active');
        document.getElementById("fpage4").style.visibility = 'hidden';
        document.getElementById("mpage4").classList.remove('active');
        document.getElementById("fpage5").style.visibility = 'hidden';
        document.getElementById("mpage5").classList.remove('active');
        document.getElementById("fpage6").style.visibility = 'hidden';
        document.getElementById("mpage6").classList.remove('active');
        document.getElementById("fpage7").style.visibility = 'hidden';
        document.getElementById("mpage7").classList.remove('active');
        document.getElementById("fpage8").style.visibility = 'hidden';
        document.getElementById("mpage8").classList.remove('active');
        document.getElementById("fpage9").style.visibility = 'hidden';
        document.getElementById("mpage9").classList.remove('active');
        document.getElementById("fpage10").style.visibility = 'hidden';
        document.getElementById("mpage10").classList.remove('active');
    }
    </script>
</head>

<body>
    <div class="wrapper">
        <nav>
            <div class="logo">Vido Site Downloader:</div>
            <ul>
                <li><button id="mpage1" class="active" type="button" onclick="tog_p1()">Page 1</button></li>
                <li><button id="mpage2" class="" type="button" onclick="tog_p2()">Page 2</button></li>
                <li><button id="mpage3" class="" type="button" onclick="tog_p3()">Page 3</button></li>
                <li><button id="mpage4" class="" type="button" onclick="tog_p4()">Page 4</button></li>
                <li><button id="mpage5" class="" type="button" onclick="tog_p5()">Page 5</button></li>
                <li><button id="mpage6" class="" type="button" onclick="tog_p6()">Page 6</button></li>
                <li><button id="mpage7" class="" type="button" onclick="tog_p7()">Page 7</button></li>
                <li><button id="mpage8" class="" type="button" onclick="tog_p8()">Page 8</button></li>
                <li><button id="mpage9" class="" type="button" onclick="tog_p9()">Page 9</button></li>
                <li><button id="mpage10" class="" type="button" onclick="tog_p10()">Page 10</button></li>
            </ul>
        </nav>
        <br>
        <section class="sec1 container_row">
            <div id="fpage1" style="visibility: visible;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage2" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage3" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage4" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage5" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage6" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage7" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage8" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage9" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
            <div id="fpage10" style="visibility: hidden;" class="layer1 iframe-container">
                <span><iframe src="./form.php"></iframe> </span>
            </div>
        </section>
    </div>
</body>

</html>