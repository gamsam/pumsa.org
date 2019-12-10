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

    <div class="left-side-bar">
        <ul>
            <li><a href="<?php echo BASE_URL . '/admin/posts/index.php' ?>">Manage Posts</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/users/index.php' ?>">Manage Users</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/topics/index.php' ?>">Manage Topics</a></li>
        </ul>
    </div>

    <div class="admin-content">
        <div class="btn-group-sm" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add Post </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Posts </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Add Post </h2>

            <form action="create.php" method="post">
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

                <div>
                    <button type="submit" class="btn btn-a">Add Post</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>