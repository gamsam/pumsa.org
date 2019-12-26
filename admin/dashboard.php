<?php

include_once('../path.php');
include(ROOT_PATH . '/app/controllers/posts.php');
adminOnly();

$PageTitle = "PUMSA - Admin Section: Dashboard";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/includes/adminheader.php');

?>


<div class="admin-wrapper">

    <?php include(ROOT_PATH . '/app/includes/adminsidebar.php'); ?>

    <div class="admin-content">

        <div class="content">

            <div class="jumbotron" style="text-align: center;">
                <h1 class="display-4" style="font-size: 35px"> Welcome to your Admin Dashboard</h1>
                <p class="lead" style="font-size: 15px">Here, you can manage Sliders, Blog Posts & Topics, News and Users. You can access the management section of the website with the menu on the left. Be careful of changes you make as these are immediately implemented on the live website.</p>
                <hr class="my-4">
                <p>If you have any questions, please contact the super-admin.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="https://wa.me/2347052602466?text=Hello" role="button" style="font-size: 15px">Contact Super-Admin</a>
                </p>
            </div>

            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>