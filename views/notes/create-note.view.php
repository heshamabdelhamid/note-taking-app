<?php
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/nav.php';
require __DIR__ . '/../partials/banner.php';
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 h-full grid place-items-center">
        <form method="POST" class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                        Title
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input name="title" value="<?= $_POST['title'] ?? '' ?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                        id="title" type="text">
                </div>
            </div>
            <?php if (isset($errors['title'])): ?>
                <ul class="text-red-500 mt-2 list-disc pl-5">
                    <?php foreach ($errors['title'] as $error) : ?>
                        <li>
                            <span><?= $error ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="desctiption">
                        Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea name="body" id="desctiption"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"><?= $_POST['body'] ?? '' ?></textarea>
                </div>
            </div>
            <?php if (isset($errors['body'])): ?>
                <ul class="text-red-500 mt-2 list-disc pl-5">
                    <?php foreach ($errors['body'] as $error) : ?>
                        <li>
                            <span class="text-red-500"><?= $error ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button class="shadow bg-teal-500 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'  ?>