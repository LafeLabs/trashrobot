<?php
/* javascript this pairs with:

    var httpc = new XMLHttpRequest();
    var url = "shapesaver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    httpc.send("data=" + data);//send text to saver.php

*/
    $data = $_POST["data"]; //get data 
    $file = fopen("shapes/data.txt","w");// create new file with this name
    fwrite($file,$data); //write data to file
    fclose($file);  //close file
?>