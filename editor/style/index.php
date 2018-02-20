<!doctype html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
        <div id="maineditor"></div>
<div id = "datadiv" style = "display:none;"><?php
    $url = "data.txt";        //get url     
    $data = file_get_contents($url);//get data 
    echo $data; //put data in this div to get placed in editor by javascript 
?></div>
<script>
editor = ace.edit("maineditor");
editor.setTheme("ace/theme/cobalt");
editor.getSession().setMode("ace/mode/css");
editor.setValue(document.getElementById("datadiv").innerHTML);
document.getElementById("maineditor").onkeyup = function(){
    data = editor.getSession().getValue();
    var httpc = new XMLHttpRequest();
    var url = "saver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("data=" + data);//send text to saver.php
}
</script>
<style>
    h2{
        text-align:center;
    }
    #maineditor{
        position:absolute;
        left:5%;
        right:5%;
        top:5%;
        bottom:5%;
    }
</style>
</body>
</html>