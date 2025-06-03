<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        You are on BOOKS page

        <a href="/book?id=<?= $book['id'] ?>" class="block text-blue-500 hover:underline">
            <li><?= htmlspecialchars($book['title']) . $book['author'] ?></li>
        </a>

        <form class="mt-6" method="POST">
            <input type="hidden" name="id" value="<?= $book['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>

    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>