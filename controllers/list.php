<?php
require('models/_dbConnect.php');
require('models/task.php');
$tasks = fetchList($_GET['userId']);
$template = 'list.php';
