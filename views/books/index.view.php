<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        You are on BOOKS page
        <?php foreach ($books as $book) : ?>
            <a href="/book?id=<?= $book['id'] ?>" class="block text-blue-500 hover:underline">
                <li><?= $book['title'] . ' - ' . $book['author'] ?></li>
            </a>
        <?php endforeach; ?>
        <a href="/books/create" class="block text-blue-500 hover:underline">
            Create Book
        </a>
    </div>


</main>
<?php require base_path('views/partials/footer.php') ?>