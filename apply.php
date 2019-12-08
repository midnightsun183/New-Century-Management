<?php
    $keys = array('id_number','first_name');
    $csv_line = array();
    foreach($keys as $key){
        array_push($csv_line,'' . $_GET[$key]);
    }
    $fname = 'file_to_write_to.csv';
    $csv_line = implode(',',$csv_line);
    if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
    $fcon = fopen($fname,'a');
    $fcontent = $csv_line;
    fwrite($fcon,$csv_line);
    fclose($fcon);
?>


<!--

https://stackoverflow.com/questions/22264375/how-to-export-html-form-to-csv-file

$Keys is all the names of the input fields you have, and you can add as many as you'd like. $fname is the name of the file you want to write to. The csv file gets added new lines when the form is submitted.

You could look after this: Write a text file and force to download with php. If you want to force download the file. You can also look into this for a redirect instead of download: How to make a redirect in PHP?. You could also add:

echo file_get_contents($fname);

to your PHP
-->
