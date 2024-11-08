<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h3 class="text-blue-500 hover:underline"><?= $note['title'] ?></h3>
        <p class="text-blue-500 hover:underline"><?= $note['body'] ?></p>
    </div>
</main>

<?php require('partials/footer.php') ?>