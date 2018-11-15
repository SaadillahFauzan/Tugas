<?php 
$varA= $_POST['a'];
$varOF=$_POST['of'];
$varB= $_POST['b'];

if($varA!=0&&$varB!=0)
{
if($varOF==">")
	{
		if($varA>$varB)
		{echo "$varA > $varB=TRUE";}
			else
				{echo "$varA > $varB=FALSE";}
	}
	elseif ($varOF=="<") 
			{
				if($varA<$varB)
				{echo "$varA < $varB=TRUE";}
				else
					{echo "$varA < $varB=FALSE";}
			}
			elseif ($varOF=="==")
				{
				if($varA==$varB)
				{echo "$varA == $varB=TRUE";}
				else
				{echo "$varA == $varB=FALSE";}
				}
					elseif ($varOF=="<=") 
						{
						if($varA<=$varB)
						{echo "$varA <= $varB=TRUE";}
						else
						{echo "$varA <= $varB=FALSE";}		
						}
							elseif ($varOF==">=") 
							{
							if($varA>=$varB)
							{echo "$varA >= $varB=TRUE";}		
							else
							{echo "$varA <= $varB=FALSE";}

							}
								elseif ($varOF=="!=") 
								{
								if($varA!=$varB)
								{echo "$varA != $varB=TRUE";}
								else
								{echo "$varA != $varB=FALSE";}		
								}
}

else
{echo "data masih kosong.";}

 ?>