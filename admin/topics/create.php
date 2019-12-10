<?php

include_once('../../path.php');
$PageTitle = "PUMSA - Admin: Add Topic";

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
        <div class="btn-group-sm" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Topic </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Topics </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Add Topic </h2>

            <form action="create.php" method="post">
                <div>
                    <label>Topic</label>
                    <input type="text" name="topic" class="text-input">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" class="editor" id="editor"> Describe the topic</textarea>

                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                </div>
                <div>
                    <button type="submit" class="btn btn-a">Add Topic</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>