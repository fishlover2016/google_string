
<?PHP

$fh=fopen("a0.txt",r);

$num;
fscanf($fh, "%d\n", $num);

$i2=3;
$j2=7;

$s2[0]=0;
$s2[1]=0;
$s2[2]=1;

$f2=fopen("out0.txt",w);

for($k=1;$k<=$num;$k++)
{

	$data;
	fscanf($fh, "%d\n", $data);

while($i2 < $data)
{
	
	$s2[$i2]=0;
	if($s2[($i2-1)/2] == 0)
	{
		$s2[$i2+($i2-1)/2+1]=1;
	}
	else
	{
		$s2[$i2+($i2-1)/2+1]=0;
	}
	
	for($i=$i2+1;$i<$j2;$i++)
	{
		if($i == ($i2+($i2-1)/2+1))
		{
			
		}
		else
		{
			$s2[$i]=$s2[$i-$i2-1];
		}
	}
	
	
	$i2=$j2;
	$j2=$j2*2+1;
	
	
}

	
	echo "Case #" . $k . ": " . $s2[$data-1] . "\n";
	fwrite($f2,"Case #" . $k . ": " . $s2[$data-1] . "\n");
	
}




?>

