<?php

include_once('../../path.php');
$PageTitle = "PUMSA - Admin: Manage Users";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/controllers/users.php');
include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="button-group" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add User </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Users </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Manage Users </h2>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th colspan="3">Action</th>
                </thead>

                <tbody>

                    <?php foreach ($users as $key => $user) : ?>
                        <tr>
                            <td> <?php echo $key + 1; ?> </td>
                            <td> <?php echo $user['username']; ?> </td>
                            <td> <?php echo $user['email']; ?> </td>
                            <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-b-n">Edit</a></td>
                            <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>

                            <?php if ($user['admin']) : ?>
                                <td><a href="edit.php?admin=0&a_id=<?php echo $user['id']; ?>" class="unadmin btn btn-sm btn-outline-danger">Remove as Admin</a></td>
                            <?php else : ?>
                                <td><a href="edit.php?admin=1&a_id=<?php echo $user['id']; ?>" class="admin btn btn-sm btn-outline-success">Make an Admin</a></td>
                            <?php endif; ?>

                        </tr>
                    <?php endforeach; ?>

                    <!-- <?php foreach ($admins as $key => $user) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td>Admin</td>
                            <td><a href="" class="btn btn-sm btn-b-n">Edit</a></td>
                            <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?> -->

                </tbody>
            </table>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>