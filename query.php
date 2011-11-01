<?php
	require_once 'config.php';
	$query = "SELECT * FROM ".$table_snow."";
	$result = mysql_query($query);
	$strippedResults = '';
	while($row = mysql_fetch_array($result))
	{
				$strippedResults []= array( 
					'id' => stripcslashes($row['id_snow']),
					'url' => stripcslashes($row['url']),
					'height' => stripcslashes($row['height']),
					'width' => stripcslashes($row['width']),
					'rotationType' => stripcslashes($row['rotationType']),
					'number_leaves' => stripcslashes($row['number_snow'])				
					);
			
			

	}
	print_r(json_encode($strippedResults)).'<br>';
?>