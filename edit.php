<?php
$title = 'Employee';
require_once 'includes/header.php';
require_once 'db/conn.php';
//get attendee
if (isset($_GET['id'])) {
    $empId = $_GET['id'];
    $res = $crud->getAttendeDetails($empId);
    if ($res) {
        ?>
        <div class="container my-3">
        <form method="post" action="update">
            <input type="hidden" value="<?php echo $empId ;?>" name="empId">
            <div class="form-group">
                <label for="exampleInputPassword">Full Name :</label>
                <input type="text" name="fullname" class="form-control" id="exampleInputPassword" value="<?php echo $res["name"]; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $res["email"]; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Date Of Birth :</label>
                <input type="date" name="dob" class="form-control" id="exampleInputPassword" value="<?php echo $res["dob"]; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Position :</label>
                <input type="text" class="form-control" name="position" id="position" value="<?php echo $res["position"]; ?>">
                <datalist id="position">
                    <option value="Developer">
                    <option value="Hr">
                    <option value="QA">
                    <option value="Testing">
            </datalist>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Phone:</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPassword" value="<?php echo $res["phone"]; ?>">
            </div>
           
            <button type="submit" name="update" class="btn btn-primary">save Changes</button>
        </form>
        </div>

        <?php
    } else {
        ?>
        <div class="container my-3">
            <div class="alert alert-primary" role="alert">
            Please Check Deatails of Employee!!
            </div>
        </div>
        <?php
    }
} else {
    ?>
      <div class="container">
            <div class="alert alert-primary" role="alert">
            Please Check Deatails of Employee!!
            </div>
        </div>
    <?php
}

?>

<?php require_once 'includes/footer.php'; ?>
