<?php
//file: view/posts/view.php
require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();

$post = $view->getVariable("post");
$currentuser = $view->getVariable("currentusername");
$newcomment = $view->getVariable("comment");
$errors = $view->getVariable("errors");

$view->setVariable("title", "View Post");

?><h1><?= ("Post").": ".htmlentities($post->getTitle()) ?></h1>
<em><?= sprintf ("by %s"),$post->getAuthor()->getUsername()) ?></em>
<p>
	<?= htmlentities($post->getContent()) ?>
</p>