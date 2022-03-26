<?php
$title = 'IT';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getAttendees();

?>

<h2 class="text-center">All Attendees</h2>
<table class="table table-dark my-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fullname</th>
      <th scope="col">position</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      while($r = $results->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <tr>
      <th scope="row"><?php echo $r['id']; ?></th>
      <td><?php echo $r['name']; ?></td>
      <td><?php echo $r['position']; ?></td>
      <td>
        <a class="view-btn" href="view.php?id=<?php echo $r['id']; ?>">View</a>
        <a class="edit-btn" href="edit.php?id=<?php echo $r['id']; ?>">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?')" class="del-btn" href="delete.php?id=<?php echo $r['id']; ?>">Delete</a>
    </td>
    </tr>
          <?php

      }
      ?>
    
  </tbody>
</table>