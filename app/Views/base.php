<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <?= $this->include('layouts/head') ?>
</head>

<body>

<?= $this->include('layouts/header') ?>

<?= $this->include('layouts/navbar') ?>

            <?= $this->renderSection('content') ?>

<?= $this->include('layouts/footer') ?>


<?= $this->include('layouts/scripts') ?>



</body>

</html>