<?php

$a=$_GET["txt1"];
$b=$_GET["txt2"];
$c=$_GET["txt3"];
$d=$_GET["txt4"];
$e=$_GET["txt5"];
$f=($a+$b+$c+$d+$e)/5
?>
<h1 align="center">Marksheet</h1>
<table border="1"align="center">
<?php
echo "<tr>
<td>Subject</td>
<td>Marks</td>
</tr>
<tr><td>Maths</td>
<td>$a</td>
</tr>
<tr><td>Physics</td>
<td>$b</td>
</tr>
<tr><td>Chemistry</td>
<td>$c</td>
</tr>
<tr><td>English</td>
<td>$d</td>
</tr>
<tr><td>Computer</td>
<td>$e</td>
</tr>
<tr><td>
<b>Average marks</b></td>
<td><b>$f</b></td>
</tr>
</table>";
?>
<h3 align="center" >

<?php
if($f >33  && $f < 50){
    echo "You have achieved third class";
}
else if  ($f >50  && $f < 65  ){
    echo "You have achieved second class";
}
else if  ($f >65 && $f < 80  ){
    echo "You have achieved First class";
}
else if  ( $f >80){
    echo "First class with distinction";
}
else
    echo "Sorry, you are failed in the exam";






?>
</h3>