<?php
$title = 'IT';
require_once 'includes/header.php';
require_once 'db/conn.php';
?>

<div class="container my-3">
    <form method="post" action="success">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" 
             placeholder="Enter your first name" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastame">Last Name</label>
            <input type="text" class="form-control" id="lastname" 
             placeholder="Enter your last name" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob"  name="dob">
        </div>
        <div class="form-group">
        <label  for="browser">Choose your Designation:</label>
            <input class="form-control" list="browsers" name="browser" id="browser"  name="position">
            <datalist id="browsers">
                <option value="Developer">
                <option value="Hr">
                <option value="QA">
                <option value="Testing">
            </datalist>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" 
            placeholder="Enter email"  name="email">
        </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="phone" class="form-control" id="contact" 
            placeholder="Enter your contact number"  name="phone">
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
<?php require_once 'includes/footer.php'; ?>
