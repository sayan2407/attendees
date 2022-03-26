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
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Position</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><?php echo $res["name"] ?></th>
                <td><?php echo $res["dob"] ?></td>
                <td><?php echo $res["position"] ?></td>
                <td><?php echo $res["email"] ?></td>
                <td><?php echo $res["phone"] ?></td>
                </tr>
            </tbody>
            </table>
            <a class="view-btn back" href="attendees">Back To The List</a>
        <a class="edit-btn" href="edit.php?id=<?php echo $empId; ?>">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?')" class="del-btn" href="delete.php?id=<?php echo $empId; ?>">Delete</a>
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
