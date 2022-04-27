<!DOCTYPE html>
<html lang="en">

<?php include('views/includes/head.php'); ?>

<body>

    <?php if (isset($_GET['title'])) : ?>

        <?php if ($_GET['title'] == "Register") : ?>

            <?php include('views/register/register.php'); ?>

        <?php else : ?>

            <?php echo "Title Not Found!"; ?>

        <?php endif; ?>

    <?php else : ?>

        <?php include('views/login/login.php'); ?>

    <?php endif; ?>

</body>

<?php include('views/includes/footer.php'); ?>

</html>