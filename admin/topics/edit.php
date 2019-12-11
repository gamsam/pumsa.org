<?php

include_once('../../path.php');
include_once(ROOT_PATH . '/app/controllers/topics.php');
$PageTitle = "PUMSA - Admin: Edit Topic";

function customPageHeader()
{ ?>

<?php }

// include(ROOT_PATH . '/app/controllers/users.php');
include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="btn-group-sm" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Topic </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Topics </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Edit Topic </h2>

            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div>
                    <label>Topic</label>
                    <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" class="editor" id="editor"><?php echo $description ?></textarea>

                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                </div>
                <div>
                    <button type="submit" name="update-topic" class="btn btn-a">Update Topic</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>