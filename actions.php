<?php
$m = new MongoClient( 'mongodb://localhost:24444');
$cursor = $m->users->find( array( 'name' => 'marat'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
