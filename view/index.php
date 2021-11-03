<?php require_once('view/header.php'); ?>

<?php foreach ($articles as $article) : ?>
    <div>
        <a href="?page=article&id=<?= $article['id'] ?>">
            <h1><?= $article['title'] ?></h1>
        </a>
        <p><?= $article['content'] ?></p>
    </div>
<?php endforeach ?>

<?php require_once('view/footer.php'); ?>