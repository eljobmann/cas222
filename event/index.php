<?php

//include '../includes/db.inc.php';
include '../includes/db_local.inc.php';

try
{
  $sql = 'SELECT * FROM events';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error. Please contact network admin.' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

foreach ($result as $row)
{
     $race[] = array(
		'race' => $row['race'],
		'run' => $row['run'],
		'swim' => $row['swim'],
		'bike' => $row['bike'],
		'start' => $row['start'],
		'cost' => $row['cost'],
        'description' => $row['description'],
     'images' => $row['images']);
} 
    
/*while ($row = $result->fetch()) {
    
  $contents[] = array(
      'race' => $row['race'],
    'run' => $row['run'],
    'swim' => $row['swim'],
	'bike' => $row['bike'],
	'start' => $row['start'],
`	'cost' => $row['cost']);
}*/

include 'event.html.php';
?>