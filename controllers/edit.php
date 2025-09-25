<?php

require('models/_dbConnect.php');
require('models/task.php');

$task = fetchTask($_GET['userId'], $_GET['taskId']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $status = $_POST['status'];
  if (!empty($title) && !empty($description) && !empty($date) && !empty($status)) {
    editTask($title, $description, $date, $status, $_GET['userId']);
    header("Location: http://localhost/to-do-list/index.php?page=list&userId=" . $_GET['userId']);
  }
}

$template = "edit.php";