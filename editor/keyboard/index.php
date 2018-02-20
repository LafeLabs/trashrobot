<!DOCTYPE HTML>
<html>
<head>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
KEYBOARD
-->
    <title>/keyboard/</title>    
<script  id = "bytecodeScript">
/*
<?php
    $url = "data.txt";//get url 
    $data = file_get_contents($url);
    echo $data;
?>
*/   
</script>
</head>
<body> 
<table id = "lowercase">
    <tr class = "toprow">
       <td>`</td> 
       <td>1</td> 
       <td>2</td> 
       <td>3</td> 
       <td>4</td> 
       <td>5</td> 
       <td>6</td>
       <td>7</td>
       <td>8</td> 
       <td>9</td> 
       <td>0</td> 
       <td>-</td> 
       <td>=</td> 
    </tr>
    <tr class = "qwerty">
        <td>q</td>
        <td>w</td>
        <td>e</td>
        <td>r</td>
        <td>t</td>
        <td>y</td>
        <td>u</td>
        <td>i</td>
        <td>o</td>
        <td>p</td>
        <td>[</td>
        <td>]</td>
        <td>\</td> 
    </tr>
    <tr class = "asdf">
        <td>a</td>
        <td>s</td>
        <td>d</td>
        <td>f</td>
        <td>g</td>
        <td>h</td>
        <td>j</td>
        <td>k</td>
        <td>l</td>
        <td>;</td>
        <td>'</td>
    </tr>
    <tr  class = "bottomrow">
        <td>z</td>
        <td>x</td>
        <td>c</td>
        <td>v</td>
        <td>b</td>
        <td>n</td>
        <td>m</td>
        <td>,</td>
        <td>.</td>
        <td>/</td>
    </tr>
</table>
<div class = "divider"></div>
<table id = uppercase>
        <tr class = "toprow">
           <td>~</td> 
           <td>!</td> 
           <td>@</td> 
           <td>#</td> 
           <td>$</td> 
           <td>%</td> 
           <td>^</td> 
           <td>&amp</td> 
           <td>*</td> 
           <td>(</td> 
           <td>)</td> 
           <td>_</td> 
           <td>+</td> 
        </tr>
        <tr class = "qwerty">
            <td>Q</td>
            <td>W</td>
            <td>E</td>
            <td>R</td>
            <td>T</td>
            <td>Y</td>
            <td>U</td>
            <td>I</td>
            <td>O</td>
            <td>P</td>
            <td>{</td>
            <td>}</td>
            <td>|</td> 
        </tr>
        <tr class = "asdf">
            <td>A</td>
            <td>S</td>
            <td>D</td>
            <td>F</td>
            <td>G</td>
            <td>H</td>
            <td>J</td>
            <td>K</td>
            <td>L</td>
            <td>:</td>
            <td>"</td>
        </tr>
        <tr  class = "bottomrow">
            <td>Z</td>
            <td>X</td>
            <td>C</td>
            <td>V</td>
            <td>B</td>
            <td>N</td>
            <td>M</td>
            <td>&lt</td>
            <td>&gt</td>
            <td>?</td>
        </tr>
    </table>
<textarea id = "textIO"></textarea>

<script>
currentTable = []; 
for(var index = 0;index < 01777;index ++){
    currentTable.push("");
}
var inputbytecode = document.getElementById("bytecodeScript").text;
var bytecodearray = inputbytecode.split("\n");
for(var index = 0;index < bytecodearray.length;index++){
    if(bytecodearray[index].includes(":")){
        var localBytecode = bytecodearray[index].split(":");
        var localAddress = parseInt(localBytecode[0],8);
        currentTable[localAddress] = localBytecode[1];
    }
}

tds = document.getElementsByTagName("TD");
for(var index = 0;index < tds.length;index++){
    var newinput = document.createElement("INPUT");
    var localChar = tds[index].innerHTML;
    if(localChar == "&lt;"){
        localChar = "<";
    }
    if(localChar == "&gt;"){
        localChar = ">";
    }
    if(localChar == "&amp;"){
        localChar = "&";
    }
    var localCharCode = localChar.charCodeAt(0);
    var localCommandCode=currentTable[localCharCode];
    var localCommandCodeString = "0" + parseInt(localCommandCode.toString(8),8).toString(8);
    if(localCommandCode.length > 1){
        newinput.value = localCommandCodeString;
    }
    newinput.id = "input0" + localCharCode.toString(8);
    tds[index].id = "id0" + localCharCode.toString(8);
    tds[index].appendChild(newinput);
    newinput.onchange = function(){
        currentAddress = parseInt(this.id.substring(5),8);
        currentTable[currentAddress] = this.value.toString(8) + ",";
        outputcode();
    }
    var newdiv = document.createElement("div");
    newdiv.innerHTML = "0" + localCharCode.toString(8);
    newdiv.className = "address";
    tds[index].appendChild(newdiv);
}

outputcode();

function outputcode(){
    var localString = "";
    for(var index = 040;index <= 0176;index++){
       localString += "0" + index.toString(8) + ":"  + currentTable[index]+ "\n";
    }
    document.getElementById("textIO").value = localString;
}
</script>
<style>
input{
    position:absolute;
    left:0px;
    top:0px;
    margin-top:0px;
    width:40px;
    font-family:courier;
    font-size:16px;
    z-index:2;
    color:red;
}
table{
    position:relative;
}
td{
    text-align:center;
    width:2em;
    font-family:courier;
    font-size:22px;
    padding-top:1em;
    border:solid;
    cursor:pointer;
}
.toprow td{
    position:relative;
}

.qwerty td{
    position:relative;
    left:4em;
}
.asdf td{
    position:relative;
    left:5em;
}
.bottomrow td{
    position:relative;
    left:6em;
}
.divider{
    border-top:solid;
    border-color:red;
}
.address{
    font-size:18px;
}
</style>
</body>
</html>