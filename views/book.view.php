<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        You are on BOOKS page

        <a href="/books?id=<?= $book['id'] ?>" class="block text-blue-500 hover:underline">
            <li><?= $book['title'] . $book['author'] ?></li>
        </a>

    </div>
</main>
<?php require 'partials/footer.php'; ?>