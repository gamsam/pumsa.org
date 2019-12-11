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
                    <th colspan="2">Action</th>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>@gamsam</td>
                        <td>Admin</td>
                        <td><a href="" class="btn btn-sm btn-b-n">Edit</a></td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Femi</td>
                        <td>Admin</td>
                        <td><a href="" class="btn btn-sm btn-b-n">Edit</a></td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>