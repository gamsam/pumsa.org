<?php

include_once('../../path.php');
include_once(ROOT_PATH . '/app/helpers/middleware.php');
include_once(ROOT_PATH . '/app/controllers/posts.php');
$PageTitle = "PUMSA - Admin: Add Post";
adminOnly();

function customPageHeader()
{ ?>

<?php }

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

            <form class="form-a" action="create.php" method="post" enctype="multipart/form-data">

                <?php include_once(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <div>
                    <label>Title</label>
                    <input type="text" value="<?php echo $title; ?>" name="title" class="text-input">
                </div>

                <div>
                    <label>Author</label>
                    <input type="text" value="<?php echo $author; ?>" name="author" class="text-input">
                </div>

                <div>
                    <label>Body</label>
                    <textarea name="body" value="<?php echo $body; ?>" class="editor" id="editor"><?php echo $body; ?></textarea>

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

                <div class="form-group">
                    <label>Topic</label>
                    <select name="topic_id" class="text-input">
                        <option value=""> Select </option>

                        <?php foreach ($topics as $key => $topic) : ?>

                            <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                <option selected value="<?php echo $topic['id'] ?>"> <?php echo $topic['name'] ?> </option>
                            <?php else : ?>
                                <option value="<?php echo $topic['id'] ?>"> <?php echo $topic['name'] ?> </option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div>

                    <?php if (empty($published)) : ?>
                        <label class="">
                            <input class="" type="checkbox" name="published">
                            Check to publish
                        </label>
                    <?php else : ?>
                        <label class="">
                            <input class="" type="checkbox" name="published" checked>
                            Check to publish
                        </label>
                    <?php endif; ?>

                </div>

                <style>
                    input[type=checkbox] {
                        transform: scale(0.6);
                    }
                </style>

                <div style="text-align: center;">
                    <button type="submit" name="add-post" class="btn btn-a">Add Post</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>