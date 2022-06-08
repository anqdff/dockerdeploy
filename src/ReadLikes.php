<?php
$conn = pg_connect('host=localhost user=postgres password=12345678 dbname=Likes');
$sql= pg_query($conn,"SELECT * FROM likesA");

$result=pg_fetch_all($sql,PGSQL_ASSOC);
exit(json_encode($result));
