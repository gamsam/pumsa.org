<?php

include_once('../../path.php');
include_once(ROOT_PATH . '/app/controllers/topics.php');
include_once(ROOT_PATH . '/app/helpers/middleware.php');
adminOnly();
$PageTitle = "PUMSA - Admin: Manage Topics";

function customPageHeader()
{ ?>

<?php }

// include(ROOT_PATH . '/app/controllers/users.php');
include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="button-group" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Topic </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Topics </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Manage Topics </h2>

            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
                </thead>

                <tbody>
                    <?php foreach ($topics as $key => $topic) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $topic['name']; ?></td>
                            <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="btn btn-sm btn-b-n">Edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>