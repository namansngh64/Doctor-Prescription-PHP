<?php
session_start();
include("connection.php");
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
    $apikey = 'fa81b3dc-bef9-49ee-9ae8-8859ae31712e';
    $value = "https://localhost/project3/view.php?ref=$ref"; // can aso be a url,     starting with http..
 
    // Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string use POST rather than get.  See example #5
    $result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));
 
    // Save to root folder in website
    file_put_contents('mypdf-1.pdf', $result);
}else{
    header("Location:../main.php");
}