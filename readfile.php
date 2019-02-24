<?php
$handle = fopen("inputfile.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        echo $line;
        exec("wget ".$download_link." \ --referer='".$download_referer."' \ --cookies=off --header \"Cookie: JSESSIONID=".$session_id."\" \ --user-agent='Mozilla/5.0 (Windows NT 6.0) Gecko/20100101 Firefox/14.0.1'");
    ?>
    }

    fclose($handle);
} else {
    // error opening the file.
} 
?>