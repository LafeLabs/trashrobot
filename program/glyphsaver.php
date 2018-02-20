<?php
/* javascript this pairs with:

document.getElementById("savebutton").onclick = function(){
    doTheThing(0700);
    drawGlyph(currentGlyph);
    doTheThing(0740);
    data = output;
    var httpc = new XMLHttpRequest();
    var url = "glyphsaver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    httpc.send("data=" + data);//send text to saver.php
}
    

*/
    $data = $_POST["data"]; //get data 
    $file = fopen("run/data.txt","w");// create new file with this name
    fwrite($file,$data); //write data to file
    fclose($file);  //close file
?>