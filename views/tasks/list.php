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
  </section>
  <?php foreach ($tasks as $task) { ?>
    <section class="grid">
      <div><?= $task['title'] ?></div>
      <div><?= $task['description'] ?></div>
      <div><?= $task['due_date'] ?></div>
      <div><?= $task['status'] ?></div>
    </section>
  <?php } ?>
</section>