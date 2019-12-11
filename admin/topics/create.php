<?php

include_once('../../path.php');
include_once(ROOT_PATH . '/app/controllers/topics.php');
$PageTitle = "PUMSA - Admin: Add Topic";

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
            <h2 class="page-title"> Add Topic </h2>

            <form action="create.php" method="post">
                <div>
                    <label>Topic</label>
                    <input type="text" name="name" class="text-input">
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
                    <button type="submit" name="add-topic" class="btn btn-a">Add Topic</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>