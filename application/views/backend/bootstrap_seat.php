<center>

<table class="seat">

	<?php 

	$total=$totals;
	$r=$matrix;//$r is the value that is taken from the martix layout
	// $totall=$total+2;
	switch ($total) {
		case '47':
			$k=12;
			break;
		case '43':
			$k=11;
			break;
		case '39':
			$k=10;
			break;
		case '35':
				$k=9;
				break;
		case '31':
			$k=8;
			break;
		case '27':
			$k=7;
			break;
		
		case '23':
			$k=6;
			break;
		case '19':
			$k=5;
			break;
		case '15':
			$k=4;
			break;
		default:
			$k=10;
			break;
	}
	
	if($r==5){
$i=$total+($k+1);
}elseif($r==4){
	$i=$total+($k);
}
$l=$i/$r;//5 is the value of row taken from matrix layout
//$j=$i/$l;//$j is row and $k is column
if($r==5){
		$column=$l ;
		$gap=$l-1;
	 }elseif($r==4){
		$column=$l+1;
		$gap=$l;		
	};

	
	$s=0;
	$z=0;
	$a=0;
	$c=1;
	$b=-1;
	$d=-2;

	for ($row = 1; $row <= $r; $row++) {?>
	<tr>
		<?php
		for ($col = 1; $col <= $column; $col++) {	

			if($row==3&&$col>=1&&$col<=$gap){
			echo"<td></td>";
			// $c=$row*$col+2;
			}elseif($row==4&&$col==1||$row==5&&$col==1){
				echo "<td></td>";
			
			?>
			<?php 
			}else{
				if($row==1){				
				$s='A'.($row*$col+$z);
				$z=$z+1;		
			}
			elseif($row==2){				
				$s='A'.($row*$col+$a);
				$a=0;	
			}
			elseif ($row==3) {
				if($r==5){
				$s='A'.($col*2+1);
				}elseif($r==4){
					$s='B'.($col+1);
				}
			}
			elseif($row==4){
				if($r==5){									
					$s='B'.(1*$col+$b);
					$b=($b+1);
				 

				}elseif($r==4){

					$s='B'.($c);
					$c++;
				}
			}
			elseif($row==5){
				$s='B'.(2*$col+$d);
				$d=0;								
			}			
			?>
			<td>			
				<input type="checkbox"  id="asiento<?php echo $s; ?>" value="<?php echo $s; ?>" name="spam[]" /><label for="asiento<?php echo $s; ?>"><?php echo $s;?></label>&nbsp;
			</td>		
		<?php
		 	}
	}
	}
echo "</tr>";

	
	?>
</table>





</center>
