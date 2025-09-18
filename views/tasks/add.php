<section id="form-add">
  <h1>Ajouter une tache</h1>

  <form action="" method="post">
    <label for="name">Nom de la marque</label>
    <div class="flex">
      <input type="text" name="title" id="title" required>
      <input type="text" name="description" id="description" required>
      <input type="text" name="date" id="date" required>
      <select name="status" id="status">
        <option value="todo">todo</option>
        <option value="in_progress">in_progress</option>
        <option value="done">done</option>
      </select>
      <input type="submit" value="Enregistrer">
    </div>
  </form>

  <p><?php if (isset($feedback)) {
    echo $feedback;
  } ?></p>

</section>