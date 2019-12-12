<?php

include_once('../../path.php');
$PageTitle = "PUMSA - Admin: Add Post";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/controllers/users.php');
include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="btn-group-sm" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Post </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Posts </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Add Post </h2>

            <form class="form-a" action="create.php" method="post">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" class="text-input">
                </div>
                <div>
                    <label>Body</label>
                    <textarea name="content0" class="editor" id="editor">Enter Blog Post Here</textarea>

                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                </div>
                <div>
                    <label>Topic</label>
                    <select name="topic" class="text-input">
                        <option value="Poetry">Poetry</option>
                        <option value="Poetry">Life</option>
                        <option value="Poetry">Inspirational</option>
                    </select>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn btn-a">Add Post</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>