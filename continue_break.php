<?php
for($i=1;$i<11;$i++)
{
	if($i==5)
		continue;
	
	
    echo $i.'<br/>';
}
$array = array(1,2,3,-20,4,5);
foreach( $array as $key => $value)
{
	if($value<0)
		continue;
    echo $key.' : '.$value.'<br/>';
}

echo '<h1>break </h1>';
for($i=1;$i<11;$i++)
{
	if($i==5)
		break;
	
	
    echo $i.'<br/>';
}

?>