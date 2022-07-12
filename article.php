<?php

require 'includes/init.php';
$conn = require 'includes/db.php';

// $db = new Database();
// $conn = $db->getConn();

if (isset($_GET['id'])) {

$article = Article::getWithCategories($conn, $_GET['id'], true);

} else {
    $article = null;
}

 ?>

 <?php require 'includes/header.php'; ?>

 <a href="index.php">Index</a>

     <?php if (empty($article)): ?>
        <p>no articles found.</p>
            <?php else: ?>
             <article>
                 <h2><?= htmlspecialchars($article[0]['title']); ?></h2>

                 <time datetime="<?= $article[0]['published_at'] ?>"><?php
                    $datetime = new DateTime($article[0]['published_at']);
                    echo $datetime->format("j F, Y");
                ?></time>

                 <?php if ($article[0]['category_name']) : ?>
                    <p>Categories:
                        <?php foreach ($article as $a) : ?>
                            <?= htmlspecialchars($a['category_name']); ?>
                        <?php endforeach; ?>
                    </p>
                <?php endif; ?>

                 <?php if ($article[0]['image_file']) : ?>
                    <img src="/uploads/<?= $article[0]['image_file']; ?>">
                <?php endif; ?>
                 
                <p><?= htmlspecialchars($article[0]['content']); ?></p>
             </article>

     <?php endif; ?>
 
     <?php require 'includes/footer.php'; ?>