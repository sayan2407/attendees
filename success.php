<?php
$title = 'success';
require_once 'includes/header.php';
require_once 'db/conn.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $dob = $_POST['dob'];
    $position = $_POST['browser'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $isSuccess = $crud->saveRecord($firstName.' '.$lastName, $dob, $position, $email, $phone);

    if ($isSuccess) {
      ?>
      <div class="alert alert-success" role="alert">
          You successfully Registered
      </div>
      <?php
    } else {
      ?>
       <div class="alert alert-danger" role="alert">
          something went wrong
      </div>
      <?php
    }
}
?>
