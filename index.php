<?php
if (isset($_GET['page'])) {
  require('controllers/' . $_GET['page'] . '.php');
} else {
  require('controllers/list.php');
}
require('views/tasks/layout.php');