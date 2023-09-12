<?php



function getthumbnail($videourl ){
    $videourlarry =explode("?",$videourl);
    $videoidarry =explode("/",$videourlarry[0]);
    $videoid =end($videoidarry);
    echo "<img src='https://i.ytimg.com/vi/$videoid/hq720.jpg'>";
}
getthumbnail("https://youtu.be/W8-xu7EfDj0?si=R60Gv-DbvfoocilD");
getthumbnail("https://youtu.be/r-7L8IT3-vw?si=4sIoYsH1aqMtIGBE");


// echo "<pre>";
// print_r($videoid  );
// echo "</pre>";