<?php
//file: view/posts/index.php

require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();

$posts = $view->getVariable("posts");
$currentuser = $view->getVariable("currentusername");

$view->setVariable("title", "Posts");

?>

<section class="content4 cid-sACwPX3Yal" id="content4-z">    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Baca Artikel Terpercaya</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5">
                    You can arrange your articles with the Mobirise website design software.<br>
                </h4>
                <?php if (isset($currentuser)): ?>
                    <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="index.php?controller=posts&amp;action=add">New Post</a></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php foreach ($posts as $post): ?>
    <div class="container">
        <ul href="index.php?controller=posts&amp;action=view&amp;id=<?= $post->getId() ?>"><?= htmlentities($post->getTitle()) ?></ul>
        <li <?= $post->getAuthor()->getUsername() ?></li>
    </div>
    <?php endforeach; ?>
</section>