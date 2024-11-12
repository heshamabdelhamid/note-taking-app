<?php
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/nav.php';
require __DIR__ . '/../partials/banner.php';
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h3 class="text-blue-500 "><?= htmlspecialchars($note['title']) ?></h3>
        <p class="text-blue-500 "><?= htmlspecialchars($note['body']) ?></p>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'  ?>