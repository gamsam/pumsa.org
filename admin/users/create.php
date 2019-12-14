<?php

include_once('../../path.php');
include_once(ROOT_PATH . '/app/helpers/middleware.php');
adminOnly();

$PageTitle = "PUMSA - Admin: Add Users";

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
            <a href="create.php" class="btn btn-a btn-sm"> Add User </a>
            <a href="index.php" class="btn btn-a btn-sm"> Manage Users </a>
        </div>

        <div class="content">
            <h2 class="page-title"> Add User </h2>

            <form class="form-a" action="create.php" method="post">

                <?php include_once(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg form-control-a" placeholder="Username" data-rule="minlen:4" data-msg="Please enter your username">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input name="email" type="email" value="<?php echo $email; ?>" class="form-control form-control-lg form-control-a" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control form-control-lg form-control-a" placeholder="Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="form-control form-control-lg form-control-a" placeholder="Repeat Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div>

                        <?php if (empty($admin)) : ?>
                            <label class="">
                                <input class="" type="checkbox" name="admin">
                                Check to make Admin
                            </label>
                        <?php else : ?>
                            <label class="">
                                <input class="" type="checkbox" name="admin" checked>
                                Check to make Admin
                            </label>
                        <?php endif; ?>

                    </div>

                    <style>
                        input[type=checkbox] {
                            transform: scale(0.6);
                        }
                    </style>

                    <div class="col-md-12" style="text-align: center;">
                        <button type="submit" name="create-user" class="btn btn-a">Add User</button>
                    </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>