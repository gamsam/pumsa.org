<?php

include_once('../../path.php');
$PageTitle = "PUMSA - Admin: Manage Posts";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/controllers/users.php');
include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <div class="left-side-bar">
        <ul>
            <li><a href="<?php echo BASE_URL . '/admin/posts/index.php' ?>">Manage Posts</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/users/index.php' ?>">Manage Users</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/topics/index.php' ?>">Manage Topics</a></li>
        </ul>
    </div>

    <div class="admin-content">
        <div class="button-group" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Post </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Posts </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Manage Posts </h2>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Action</th>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>This is the first post</td>
                        <td>gamsam</td>
                        <td><a href="" class="btn btn-sm btn-b-n">Edit</a></td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                        <td><a href="" class="btn btn-sm btn-outline-secondary">Publish</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>This is the second post</td>
                        <td>gamsam</td>
                        <td><a href="" class="btn btn-sm btn-b-n">Edit</a></td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                        <td><a href="" class="btn btn-sm btn-outline-secondary">Publish</a></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>