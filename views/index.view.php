<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        You are on index page
        <ul>
            <?php foreach ($filteredBooks as $book) {
                echo "<li>{$book['author']}📚</li>";
            }
            ?>

        </ul>
    </div>
</main>
<?php require 'partials/footer.php'; ?>