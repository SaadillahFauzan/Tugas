<?php
{
	for ($i=1; $i<=5; $i++){
		echo"Jakarta <br>";
	}
	echo "\nSelesai";
}
?>
<p>
<?php

{
	$i = 1;
	while ($i<=5){
	echo "Jakarta <br>";
	$i = $i + 1;
	}
	echo "\nSelesai";
}
?>

<p>
<?php
{
	$i = 1;
	for ($i=1; $i<=20; $i+=2){
	echo "$i <br>";
	}
	echo "\nSelesai";
}
?>

<p>
<?php

{
	for ($i=1; $i<=512; $i*=2){
	echo "$i <br>";
	}
	echo "\nSelesai";
}
?>

<p>
<?php
{
	for ($i=5; $i<=32; $i+=3){
	echo "$i <br>";
	}
	echo "\nSelesai";
}
?>

<p>
<?php
{
	$a = 5;
	$b = 3;
	for ($i=1; $i<=10; $i++){
	echo "$a<br>";
	$a+=$b;
	$b+=2;
	}
	echo "\nSelesai";
}
?>


<p>
<?php

{
	$jumlah = 0;
	for ($i=1; $i<=10; $i+=2){
	echo "$i+";
	$jumlah += $i;
	}
	echo "= $jumlah";
	echo "<br/>\nSelesai";
}
?>



