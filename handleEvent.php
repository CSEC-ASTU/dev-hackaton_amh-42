<?php
echo "Successfully added<br>";
require('database/Event.php');
$sql = "Insert into event values (2,'3','3','3','3','3')";
newEvent($sql);
echo "Successfully Completed<br>";

echo '<a href="addEvent.php">Back to Add Events</a>';
