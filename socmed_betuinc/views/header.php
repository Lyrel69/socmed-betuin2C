<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="navbar">

    <ul class="left-link">
        <li>
            <a href="timeline.php" class="logo">&nbsp;</a>
        </li>
        <li>
            <a href="timeline.php">Socmed</a>
        </li>
    </ul>

    <?php if(isset($_SESSION['aid'])) { ?>

        <ul class="right-link">
            <li>
                <a href="profile.php">
                    <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
                </a>
            </li>
            <li>
                <a href="models/logout_account.php">Logout</a>
            </li>
        </ul>

    <?php } else { ?>

        <ul class="right-link">
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="index.php">Signup</a>
            </li>
        </ul>

    <?php } ?>

</div>

</body>
</html>