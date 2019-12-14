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
            <h2 class="page-title"> Admin Dashboard </h2>

            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
            
        </div>

    </div>

</div>


<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>