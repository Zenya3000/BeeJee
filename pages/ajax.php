<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];



if ($_POST) { ?>
    <div class="box_comment">
        <div class="box_item">
            <li><strong><?= $name; ?></strong></li>
            <li><?= $email; ?></li>
            <li><?= $date; ?></li>
        </div>

        <p> <?= $message; ?></p>
    </div>
<?php } ?>



