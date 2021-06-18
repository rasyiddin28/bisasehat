<?php
//file: view/users/login.php

require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();
$view->setVariable("title", "Login");
$errors = $view->getVariable("errors");
?>

<section class="form7 cid-sACljLXLzp" id="form7-o">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Login</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="index.php?controller=users&amp;action=login" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="lzuzbrnfDcLSIGNjglyyH6Q1uU7ht8OJYMtF3r3aFW+HUs99j1LM2PHJYXbotyOXjMPLWjBG3J/WEFDCGSjIGF2lFw/5rosmyLeafIzkBmd4TGEHUNFOkZlLiFpT4+Zt">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        Masuk dengan akun anda untuk dapat menulis artikel</p>
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                            <input type="text" name="username" placeholder="username" data-form-field="username" class="form-control" value="" id="name-form7-o">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                            <input type="password" name="passwd" placeholder="password" data-form-field="passwd" class="form-control" value="" id="email-form7-o">
                        </div>
                        
                        <div class="col-auto mbr-section-btn align-center"><button type="submit" class="btn btn-primary display-4">Login</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>