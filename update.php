<?php
$title = 'Update';
require_once 'includes/header.php';
require_once 'db/conn.php';

if (isset($_POST['update'])) {
    $empId = $_POST['empId'];
    $fullName = $_POST['fullname'];
    $dob = $_POST['dob'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $isSuccess = $crud->updateAttendeDetails($empId, $fullName, $dob, $position, $email, $phone);
   
    if ($isSuccess) {
      ?>
      <div class="alert alert-success" role="alert">
          You successfully Changes Saved
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
