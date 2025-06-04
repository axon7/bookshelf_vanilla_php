<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        You are on BOOK page

        <a href="/book/edit?id=<?= $book['id'] ?>" class="block text-blue-500 hover:underline">
            <li><?= htmlspecialchars($book['title']) . $book['author'] ?></li>
        </a>



    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>