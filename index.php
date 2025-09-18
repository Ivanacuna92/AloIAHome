<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$activePage = 'home';
?>

<?php include 'partials/layout/head.php'; ?>
<?php include 'partials/layout/header.php'; ?>

<?php include 'partials/sections/hero.php'; ?>
<?php include 'partials/sections/voicebot.php'; ?>
<?php include 'partials/sections/pains.php'; ?>
<?php include 'partials/sections/authority.php'; ?>
<?php include 'partials/sections/questions.php'; ?>
<?php include 'partials/sections/superpowers.php'; ?>

<script src="<?= JS_PATH ?>particles.js"></script>
<script>
    if (document.getElementById('particles-canvas')) {
        initParticlesCanvas();
    }
</script>
<script src="<?= JS_PATH ?>main.js"></script>
<?php include 'partials/layout/chatwidget.php'; ?>
<?php include 'partials/layout/footer.php'; ?>

