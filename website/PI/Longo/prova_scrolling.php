<html lang="en">
<head>
<style type="text/css">
.frame {
font:12px arial;
width:200;
height:200;
border:none;
overflow:hidden;
border:1px solid black;
padding:5;
}



</style>
<script language="javascript">
i = 0
var speed = 1
function scroll() {
i = i + speed
var div = document.getElementById("news")
div.scrollTop = i
if (i > div.scrollHeight - 160) {i = 0}
t1=setTimeout("scroll()",100)
}
</script>
</head>
<body onload="scroll()">
<div class="frame" id="news" onmouseover="clearTimeout(t1)" onmouseout="scroll()"> 
NEWS
<br><hr>
<br>Segment 1
<br>Segment 2
<br>Segment 3
<br>Segment 4
<br><a class="html" href="http://www.cim.unito.it" target=_blank"> Segment 5</a>
<br>Segment 6
<br>Segment 7
<br>Segment 8
<br>Segment 9
<br>Segment 10
<br>Segment 11
<br>Segment 12
<br>Segment 13
<br>Segment 14
<br>Segment 15
<br>Segment 16
<br>Segment 17
<br>Segment 18
<br>Segment 19
</div>
<br><input type="button" value="Pause" onmouseover="clearTimeout(t1)" onmouseout="scroll()">
</body>
</html>