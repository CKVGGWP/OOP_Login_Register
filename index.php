<!DOCTYPE html>
<html lang="en">

<?php include('views/includes/head.php'); ?>

<body id="fullPage">

    <?php if (isset($_GET['title'])) : ?>

        <?php if ($_GET['title'] == "Register") : ?>

            <?php include('controllers/indexController.php'); ?>

            <?php include('views/includes/header.php'); ?>

            <?php include('views/register/register.php'); ?>

        <?php elseif ($_GET['title'] == "Logged In") : ?>

            <?php include('controllers/emptySessionController.php'); ?>

            <?php include('views/loggedIn/loggedIn.php'); ?>

        <?php else : ?>

            <?php echo "Title Not Found!"; ?>

        <?php endif; ?>

    <?php else : ?>

        <?php include('controllers/indexController.php'); ?>

        <?php include('views/includes/header.php'); ?>

        <?php include('views/login/login.php'); ?>

    <?php endif; ?>

</body>

<?php include('views/includes/footer.php'); ?>

<script src="./assets/js/information.js"></script>

</html>