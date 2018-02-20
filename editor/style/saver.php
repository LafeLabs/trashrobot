<?php
/* javascript this pairs with:

document.getElementById("maineditor").onkeyup = function(){
    data = editor.getSession().getValue();
    var httpc = new XMLHttpRequest();
    var url = "page/saver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("data=" + data);//send text to saver.php
}

*/
    $data = $_POST["data"]; //get data 
    $file = fopen("data.txt","w");// create new file with this name
    fwrite($file,$data); //write data to file
    fclose($file);  //close file
?>