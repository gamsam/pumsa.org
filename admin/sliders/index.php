<?php

include_once('../../path.php');
include(ROOT_PATH . '/app/controllers/sliders.php');
adminOnly();

$PageTitle = "PUMSA - Admin: Manage Sliders";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="button-group" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Slider </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Sliders </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Manage Sliders </h2>

            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th colspan="3">Action</th>
                </thead>

                <tbody>

                    <?php foreach ($sliders as $key => $slider) : ?>
                        <tr>
                            <td> <?php echo $key + 1; ?> </td>
                            <td> <?php echo $slider['title']; ?> </td>
                            <td><a href="edit.php?id=<?php echo $slider['id']; ?>" class="btn btn-sm btn-b-n">Edit</a></td>
                            <td><a href="edit.php?delete_id=<?php echo $slider['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>

                            <?php if ($slider['published']) : ?>
                                <td><a href="edit.php?published=0&n_id=<?php echo $slider['id']; ?>" class="unpublish btn btn-sm btn-outline-danger">Unpublish</a></td>
                            <?php else : ?>
                                <td><a href="edit.php?published=1&n_id=<?php echo $slider['id']; ?>" class="publish btn btn-sm btn-outline-success">Publish</a></td>
                            <?php endif; ?>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>