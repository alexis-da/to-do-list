<section id="form-add">
  <h1>Modifier la tache <?= $task['title'] ?></h1>

  <form action="" method="post">
    <label for="name"><?= $task['title'] ?></label>
    <div class="flex">
      <input type="text" name="title" id="title" value="<?= $task['title'] ?>" required>
      <input type="text" name="description" id="description" value="<?= $task['description'] ?>" required>
      <input type="text" name="date" id="date" value="<?= $task['due_date'] ?>" required>
      <select name="status" id="status">
        <option value="<?= $task['status'] ?>"></option>
        <option value="todo">todo</option>
        <option value="in_progress">in_progress</option>
        <option value="done">done</option>
      </select>
      <input type="submit" value="Enregistrer">
    </div>
  </form>
</section>