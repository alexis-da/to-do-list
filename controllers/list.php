<?php
require('models/_dbConnect.php');
require('models/task.php');
$tasks = fetchTasks($_GET['userId']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  if (!empty($id)) {
    deleteTask($id);
  }
}


$template = 'list.php';
