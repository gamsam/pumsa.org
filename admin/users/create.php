<?php

include_once('../../path.php');
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
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter your username">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input name="email" type="email" value="<?php echo $email; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="form-control form-control-lg form-control-a" placeholder="Repeat Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <select name="role" class="text-input">
                                <option value="Admin">Admin</option>
                                <option value="Author">Author</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="text-align: center;">
                        <button type="submit" class="btn btn-a">Add User</button>
                    </div>

            </form>
        </div>
    </div>
</div>



<?php include(ROOT_PATH . '/app/includes/adminfooter.php'); ?>