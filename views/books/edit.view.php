<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    Edit book page

    <form method="POST" action="/book" class="max-w-md mx-auto">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $book['id'] ?>">
        <input type="text" name="title" placeholder="Title" class="border border-gray-300 rounded-md p-2 mb-4 w-full" value="<?= htmlspecialchars($book['title'] ?? '') ?>">
        <?php if (isset($errors['title'])) : ?>
            <p class="text-red-500 text-sm mb-4"><?= $errors['title'] ?></p>
        <?php endif; ?>
        <button type="submit"
            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Save
        </button>
    </form>

    <form id="delete-form" class="mt-6" action="/book" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $book['id'] ?>">
        <button class="text-sm text-red-500" onclick="document.querySelector('#delete-form').submit()">Delete</button>
    </form>

</div>
</main>
<?php require base_path('views/partials/footer.php') ?>