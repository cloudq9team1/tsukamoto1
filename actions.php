<?php
$m = new MongoClient( 'mongodb://localhost:24444');
$cursor = $m->tem->users->find( array( 'name' => 'tsukamoto'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
