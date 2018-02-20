<!doctype html>
<html>
<body>
<button onclick  = "location.reload();">RUN</button>
<div id = "div1"></div>
<div id = "div2"></div>
<div id = "div3"></div>
<div id = "div4"></div>
<style>
#div1{
    left:0%;
    animation-name: div1;
}
#div2{
    left:25%;
    animation-name: div2;
}
#div3{
    left:50%;
    animation-name: div3;
}
#div4{
    left:75%;
    animation-name: div4;
}
div{
    position:absolute;
    top:25%;
    bottom:0px;
    width:25%;
    animation-duration: 2s;
    animation-timing-function:step-start;
    animation-iteration-count: 1;
}
button{
    cursor:pointer;
    font-family:courier;
    font-size:36px;
}
button:hover{
    background-color:green;
}
button:active{
    background-color:yellow;
}
body{
    background-color: black;
}
</style>
<?php
echo "\n<style>\n";
$url = "data.txt";        //get url     
$data = file_get_contents($url);//get data 
echo $data; //put data in this div to get placed in editor by javascript 
echo "\n</style>\n";
?>
</body>
<html>

