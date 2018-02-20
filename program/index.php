<?php

    $baseurl = "data.txt";

    $data = file_get_contents($baseurl);
    $jsondata =json_decode($data);
    
    $shapesurl = $jsondata->shapes;
    $symbols03xxurl = $jsondata->symbols03xx;
    $symbols010xxurl = $jsondata->symbols010xx;
    $symbols07xxurl = $jsondata->symbols07xx;
    $keyboardurl = $jsondata->keyboard;

    $topfunctionsurl = $jsondata->topfunctions;

    $actions03xxurl = $jsondata->actions03xx;
    $actions010xxurl = $jsondata->actions010xx;
    $actions07xxurl = $jsondata->actions07xx;

    $pageurl = $jsondata->page;

    $initurl = $jsondata->init;
    $redrawurl = $jsondata->redraw;
    $pageeventsurl = $jsondata->pageevents;
    $styleurl = $jsondata->style;
?>   
<!DOCTYPE HTML>
<html>
<head>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
    <title>/upcycle/trashrobot/program/editor/</title>    
<script id = "bytecodeScript">
/*
01200:0333,0200,0336,0336,0330,0332,0337,0200,0336,0331,0333,0337,0337,
01201:0304,0313,0333,0200,0336,0336,0330,0330,0332,0332,0332,0335,0336,0337,0337,0342,0330,0335,0350,0335,0336,0336,0342,0335,0335,0342,0335,0304,0337,0331,0331,0333,0337,0337,
0200:0304,0342,0330,0334,0342,0330,0334,0342,0330,0334,0342,0330,0334,
0201:0342,0330,
01201:0304,0313,0333,0200,0336,0336,0330,0330,0332,0332,0332,0335,0336,0337,0337,0342,0330,0335,0350,0335,0336,0336,0342,0335,0335,0342,0335,0304,0337,0331,0331,0333,0337,0337,
0202:0304,0313,0350,0335,0336,0336,0342,0333,0342,0333,0342,0333,0342,0333,0334,0304,0337,0337,
01202:0202,0200,
01203:0304,0313,0202,0332,0333,0200,0336,0336,0330,0330,0332,0332,0332,0335,0336,0337,0337,0342,0330,0335,0350,0335,0336,0336,0342,0335,0335,0342,0335,0304,0337,0331,0331,0333,0337,0337,
0203:0344,0330,
0204:0362,0203,0334,0203,0334,0203,0334,0203,0334,0363,
01204:0202,0200,0336,0336,0330,0332,0337,0200,0336,0331,0333,0337,0337,
01205:0202,0200,0336,0336,0330,0332,0332,0332,0330,0205,0331,0331,0332,0337,0337,0333,
0205:0362,0203,0335,0203,0203,0335,0203,0335,0203,0203,0335,0363,0336,0330,0333,0336,0331,0332,0337,0365,0336,0332,0331,0337,0337,
0206:0336,0332,0337,0362,0203,0334,0336,0203,0335,0350,0335,0337,0310,0337,0203,0335,0335,0203,0335,0304,0335,0336,0313,0336,0203,0334,0337,0203,0363,0335,0335,0336,0332,0337,
01206:0202,0200,0336,0332,0206,0333,0337,
0210:0316,0336,0313,0336,0314,0337,0337,0313,
01210:0333,0200,0336,0330,0336,0332,0334,0337,0342,0336,0330,0335,0336,0330,0332,0337,071,0365,0331,0331,061,060,0365,0333,0333,0336,0333,0331,0337,0337,0337,0337,
0211:0316,0336,0336,0336,0313,0337,0337,0337,0337,0337,0337,0337,
0207:0342,0334,0342,0335,0335,0342,0334,0336,0330,0340,0331,0337,0337,0330,0340,0331,0336,
01207:0333,0336,0330,0332,0336,0336,0341,0337,0333,0333,0331,0331,0337,0337,
0210:0335,0340,0341,0330,0340,0341,0334,0334,0306,0335,0330,0340,0341,0334,0334,0342,0330,0334,0334,0342,0330,0334,0334,0342,0314,0336,0330,0335,0330,0334,0334,0337,0341,0342,0330,0341,0334,0334,0342,0330,0341,0334,0334,0342,0330,0336,0331,0331,0341,0330,0341,0335,0334,0334,0330,0341,0334,0330,0341,0334,0330,0341,0334,0330,0341,0334,0300,0332,0332,0332,0330,0330,0300,0332,0332,0332,0332,0305,0311,0336,0330,0335,0350,0334,0335,0333,0335,0351,0337,0342,0341,0330,0335,0335,0342,0341,0330,0335,0335,0342,0341,0330,0335,0335,0342,0341,0330,0335,0335,0342,0341,0330,
0210:0310,0337,0311,0336,0313,
0211:0311,0337,0310,0336,0313,
01210:0333,0200,0336,0336,0330,0332,0337,0200,0311,0337,0310,0336,0200,0337,0311,0336,0313,0336,0330,0332,0336,0335,0331,0337,0342,0334,0333,0333,0336,0333,0337,0331,0331,0337,0337,
01211:0333,0200,0336,0336,0330,0332,0337,0200,0311,0337,0310,0336,0200,0337,0311,0336,0313,0336,0330,0332,0336,0335,0331,0337,0342,0334,0336,0333,0342,0335,0335,0342,0335,0335,0333,0337,0333,0336,0333,0337,0331,0331,0337,0337,
<?php
$data = file_get_contents($shapesurl);
echo $data."\n";
$data = file_get_contents($symbols03xxurl);
echo $data."\n";
$data = file_get_contents($symbols010xxurl);
echo $data."\n";
$data = file_get_contents($symbols07xxurl);
echo $data."\n";
$data = file_get_contents($keyboardurl);
echo $data."\n";
?>

*/
</script>
<script>
<?php
    $url = "topfunctions/data.txt";//get url 
    $data = file_get_contents($topfunctionsurl);
    echo $data;
?>   
        
function doTheThing(localCommand){    
    if(localCommand >= 040 && localCommand <= 0176){
            currentHTML += String.fromCharCode(localCommand);
            currentWord += String.fromCharCode(localCommand);
    }
    if(localCommand >= 0200 && localCommand <= 0277){//shapes 
        if(!(localCommand == 0207 && editMode == false) ){
            drawGlyph(currentTable[localCommand]);    	    
        }
    }
    if(localCommand >= 01000 && localCommand <= 01777){//symbol glyphs
            drawGlyph(currentTable[localCommand]);    	    
    } 
    <?php
            $data = file_get_contents($actions03xxurl);
            echo $data;
            $data = file_get_contents($actions010xxurl);
            echo $data;
            $data = file_get_contents($actions07xxurl);
            echo $data;
    ?>

    
}
doTheThing(06);//import embedded hypercube in this .html doc
doTheThing(07);//initialize Geometron global variables
</script>
</head>
<body> 
<?php
    $data = file_get_contents($pageurl);
    echo $data;
?>   
<script>
init();

function init(){
    <?php
    $data = file_get_contents($initurl);
    echo $data;
    ?>   
}
function redraw(){
    <?php
    $data = file_get_contents($redrawurl);
    echo $data;
    ?>   
}

<?php
    $data = file_get_contents($pageeventsurl);
    echo $data;
?>   

</script>

<?php
    echo "<style>\n";
    $data = file_get_contents($styleurl);
    echo $data;
    echo "</style>\n";
?>

</body>
</html>