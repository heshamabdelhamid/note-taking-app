<?php
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/nav.php';
require __DIR__ . '/../partials/banner.php';
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a class="text-blue-500 hover:underline" href="note?id=<?= $note['id'] ?>">
                        <?= htmlspecialchars($note['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul> <br>
        <a href="notes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Creae Note
        </a>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'  ?>