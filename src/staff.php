<?php
require "staff-model.php";

use school\staff\Staff;

$staff = new Staff();
$staff = $staff->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Staff</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <a href="">Staff</a>
        </aside>
        <main>
            <h1>List of Staff</h1>
            <a href="new-Staff.php" class="btn btn-primary m-3">New Staff</a>
            <table class="table" cellspacing="0">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last name</th>
                    <th>Contact Number</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                foreach ($staff as $staff) {
                ?>
                    <tr>
                        <td><?= $staff['id'] ?></td>
                        <td><?= $staff['first_name'] ?></td>
                        <td><?= $staff['middle_name'] ?></td>
                        <td><?= $staff['last_name'] ?></td>
                        <td><?= $staff['contact_no'] ?></td>
                        <td><a href="<?php echo 'edit-staff.php?id=' . $staff['id']?>">Edit</a></td>
                        <td><a href="<?php echo 'delete-staff.php?id=' . $staff['id']?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </main>
    </div>
</body>

</html>