<?php
//file: view/posts/add.php
require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();

$post = $view->getVariable("post");
$errors = $view->getVariable("errors");

$view->setVariable("title", "Edit Post");

<section class="form5 cid-sACmZSTYcw" id="form5-r">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Tulis Artikel Baru</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="index.php?controller=posts&amp;action=add" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="sHXAJv+AxNUOS+FP/zym46PHJ3NhDcz+xDgfJltzf7cVgh+AN3Wwky31cXDf5QirO1z4fkWk6pz93L7ojIHwEVmngYfDKMPo5Skn5GXp65vZ/ue5R1M3p30Y2vWYfJ+k">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="name">
                            <input type="text" name="title" placeholder="Judul" data-form-field="name" class="form-control" value="<?= $post->getTitle() ?>" id="name-form5-r">
                            <?= isset($errors["title"])?i18n($errors["title"]):"" ?>
                        </div>
                        
                        
                        <div class="col-12 form-group" data-for="textarea">
                            <textarea name="content" placeholder="Isi Artikel" data-form-field="textarea" class="form-control" id="textarea-form5-r"><?=
                            htmlentities($post->getContent()) ?></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" name="submit" value="submit" class="btn btn-primary display-4">Publikasikan</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
