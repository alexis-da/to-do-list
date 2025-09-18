<?php
function fetchList($userId)
{
  $db = dbConnect();
  $sql = "SELECT * FROM tasks WHERE user_id=" . $userId;
  $query = $db->query($sql);
  $tasks = $query->fetchAll();
  return $tasks;
}

function addTask($title, $description, $date, $status, $userId)
{
  $db = dbConnect();
  $sql = "INSERT INTO tasks (title, description, due_date, status, user_id) VALUES (:title, :description, :due_date, :status, :user_id)";
  $query = $db->prepare($sql);
  $query->execute([
    'title' => $title,
    'description' => $description,
    'due_date' => $date,
    'status' => $status,
    'user_id' => $userId
  ]);
}