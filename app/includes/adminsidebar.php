<?php $page = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="left-side-bar">
    <ul>
        <li>
            <a class="<?php if ($page == BASE_URL . '/admin/sliders/index.php') {
                            echo ' active';
                        } ?>" href="<?php echo BASE_URL . '/admin/sliders/index.php' ?>">
                Manage Sliders
            </a>
        </li>

        <li>
            <a class="<?php if ($page == BASE_URL . '/admin/posts/index.php') {
                            echo ' active';
                        } ?>" href="<?php echo BASE_URL . '/admin/posts/index.php' ?>">
                Manage Posts
            </a>
        </li>

        <li>
            <a class="<?php if ($page == BASE_URL . '/admin/news/index.php') {
                            echo ' active';
                        } ?>" href="<?php echo BASE_URL . '/admin/news/index.php' ?>">
                Manage News
            </a>
        </li>

        <li>
            <a class="<?php if ($page == BASE_URL . '/admin/users/index.php') {
                            echo ' active';
                        } ?>" href="<?php echo BASE_URL . '/admin/users/index.php' ?>">
                Manage Users
            </a>
        </li>

        <li>
            <a class="<?php if ($page == BASE_URL . '/admin/topics/index.php') {
                            echo ' active';
                        } ?>" href="<?php echo BASE_URL . '/admin/topics/index.php' ?>">
                Manage Topics
            </a>
        </li>
    </ul>
</div>