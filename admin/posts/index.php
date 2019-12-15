<?php

include_once('../../path.php');
include(ROOT_PATH . '/app/controllers/posts.php');
adminOnly();

$PageTitle = "PUMSA - Admin: Manage Posts";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="button-group" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Post </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Posts </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Manage Posts </h2>

            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Action</th>
                </thead>

                <tbody>

                    <?php foreach ($posts as $key => $post) : ?>
                        <tr>
                            <td> <?php echo $key + 1; ?> </td>
                            <td> <?php echo $post['title']; ?> </td>
                            <td> <?php echo $post['author']; ?> </td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-sm btn-b-n">Edit</a></td>
                            <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>

                            <?php if ($post['published']) : ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish btn btn-sm btn-outline-danger">Unpublish</a></td>
                            <?php else : ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish btn btn-sm btn-outline-success">Publish</a></td>
                            <?php endif; ?>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>