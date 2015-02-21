<style type="text/css">
td.even{
	border: 1px solid red;
}
td.odd{
	border: 1px solid blue;
}
</style>

<?php

$num = 99;
echo"<table>";
echo "<tr>";
for ($rows = 1; $rows <= $num; $rows++) 
{ 
	
	if($rows%2 == 0)
		echo "<td class = 'even'>$rows</td>";
	else
		echo "<td class = 'odd'>$rows</td>";

	if($rows == $num){
		$rows++;
		echo "<td class = 'even'>$rows</td></tr>";
	}
	elseif($rows%9 == 0)
		echo "</tr><tr>";

}
echo"</table>";  
//echo "$num";
?>