<?php include __DIR__ . "/../header.php"; ?>
<?php foreach ($articles as $article): ?>
    <h2><a href="article/show/<?= $article->getId(); ?>"><?= $article->getTitle(); ?></a></h2>

    <p><?= $article->getText(); ?></p>
    <a class="btn" href="article/delete/<?= $article->getId(); ?>">Удалить комментарий</a>

    <hr>

    <style>
        .btn {
            --bg: #e74c3c;
            --text-color: #fff;
            position: relative;
            width: 150px;
            border: none;
            background: #120088;
            color: var(--text-color);
            padding: 5px;
            font-weight: bold;
            text-transform: uppercase;
            transition: 0.2s;
            border-radius: 5px;
            opacity: 0.8;
            letter-spacing: 1px;
            box-shadow: #120088 0px 7px 2px, #000 0px 8px 5px;
        }

        a:hover {
            opacity: 1;
        }

        .btn:active {
            top: 4px;
            box-shadow: #c0392b 0px 3px 2px, #000 0px 3px 5px;
        }
    </style>
<?php endforeach; ?>
<?php include __DIR__ . "/../footer.html"; ?>