<?php

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);

$db_selected = mysql_select_db(
   $db, 
   $link
);

?>