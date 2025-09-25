<section>
  <h1>Mes taches</h1>
  <section class="grid">
    <div>
      <h2>Titre</h2>
    </div>
    <div>
      <h2>Description</h2>
    </div>
    <div>
      <h2>Date d'échéance</h2>
    </div>
    <div>
      <h2>Status</h2>
    </div>
    <div class="space">
      <h2>Status</h2>
    </div>
    <div class="space">
      <h2>Status</h2>
    </div>
  </section>
  <?php foreach ($tasks as $task) { ?>
    <section class="grid">
      <div><?= htmlspecialchars($task['title']) ?></div>
      <div><?= htmlspecialchars($task['description']) ?></div>
      <div><?= htmlspecialchars($task['due_date']) ?></div>
      <div><?= $task['status'] ?></div>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input type="submit" value="Supprimer">
      </form>
      <a href="index.php?page=edit&userId=<?= $_GET['userId'] ?>&taskId=<?= $task['id'] ?>" role="button">Modifier</a>
    </section>
  <?php } ?>
</section>