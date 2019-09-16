<?php

require_once('config.php');

$db = new MysqliDb ('mysqlsvr44.world4you.com', 'sql4290266', '9969r9c', '4290266db1');
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$db->insert ('savethedate', $_POST);

echo 1;