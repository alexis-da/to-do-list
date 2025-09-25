<?php
function fetchtasks($userId)
{
  $db = dbConnect();
  $sql = "SELECT * FROM tasks WHERE user_id=:userId";
  $query = $db->prepare($sql);
  $query->execute([
    'userId' => $userId
  ]);
  $tasks = $query->fetchAll();
  return $tasks;
}

function fetchTask($userId, $taskId)
{
  $db = dbConnect();
  $sql = "SELECT * FROM tasks WHERE user_id=:userId AND id=:id";
  $query = $db->prepare($sql);
  $query->execute([
    'userId' => $userId,
    'id' => $taskId
  ]);
  $task = $query->fetch();
  return $task;
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

function deleteTask($id)
{
  $db = dbConnect();
  $sql = "DELETE FROM tasks WHERE id=:id";
  $query = $db->prepare($sql);
  $query->execute([
    'id' => $id
  ]);
}

function editTask($title, $description, $date, $status, $id)
{
  $db = dbConnect();
  $sql = "UPDATE tasks SET title=:title, description=:description, due_date=:date, status=:status WHERE id=:id";
  $query = $db->prepare($sql);
  $query->execute([
    'id' => $id,
    'title' => $title,
    'description' => $description,
    'date' => $date,
    'status' => $status
  ]);
}