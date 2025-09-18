<?php

require('models/_dbConnect.php');
require('models/task.php');

// Le formulaire a-t-il été envoyé ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $status = $_POST['status'];
  if (!empty($title) && !empty($description) && !empty($date) && !empty($status)) {
    addTask($title, $description, $date, $status, $_GET['userId']);
    $feedback = "Votre tache a bien été enregistrée.";
    header("Location: http://localhost/to-do-list/index.php?page=list&userId=" . $_GET['userId']);
  }
}

$template = "add.php";