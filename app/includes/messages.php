<?php if (isset($_SESSION['message'])) : ?>
    <div class="container fixed-bottom">
        <div class="row">
            <div class="col-md-6 col-xs-8" style="margin: 0 auto">
                <div class="alert <?php echo $_SESSION['type']; ?>" style="text-align: center;" role=" alert">
                    <?php echo $_SESSION['message']; ?>
                </div>

                <?php
                    unset($_SESSION['message']);
                    unset($_SESSION['type']);
                ?>

            </div>
        </div>
    </div>
<?php endif; ?>