<?php

include_once('../../path.php');
include(ROOT_PATH . '/app/controllers/news.php');
adminOnly();
$PageTitle = "PUMSA - Admin: Edit News";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">
        <div class="btn-group-sm" style="text-align: center;">
            <a href="create.php" class="btn btn-a btn-sm"> Add News </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage News </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Edit News </h2>

            <form class="form-a" action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id; ?>" name="id">

                <?php include_once(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <div>
                    <label>Title</label>
                    <input type="text" value="<?php echo $title; ?>" name="title" class="text-input">
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

                <div>

                    <?php if (empty($published) && $published == 0) : ?>
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
                    <button type="submit" name="update-news" class="btn btn-a">Update News</button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>