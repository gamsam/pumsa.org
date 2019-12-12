<?php if (is_array($errors) && count($errors) > 0) : ?>
    <div id="errormessageauth">
        <?php foreach ($errors as $error) : ?>
            <li style="list-style-type: none;"> <?php echo $error; ?> </li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>