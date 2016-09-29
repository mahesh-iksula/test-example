<?php
include 'test-fun2.php';
 $r = new ReflectionFunction('foo_bar');
$file = $r->getFileName();
$startLine = $r->getStartLine();
$endLine = $r->getEndLine();
//echo $file.$startLine."---".$endLine;

echo "LOL<br><br>";
foreach (glob("img/*.php") as $filename)
{
    echo $filename."<br>";
}
?>