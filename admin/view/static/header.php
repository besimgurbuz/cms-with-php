<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>Admin - <?=$title?></title>
    <link rel="icon" href="<?=public_url('assets/mini_logo.jpg')?>" type="image/x-icon" />
    <!--styles-->
    <link rel="stylesheet" href="<?=admin_public_url('styles/main.css').'?v='.time()?>">
    <link rel="stylesheet" href="<?=admin_public_url('styles/extra.css').'?v='.time()?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
          crossorigin="anonymous">
    <!--scripts-->
    <script src="<?=admin_public_url('scripts/jquery-1.12.2.min.js')?>"></script>
    <!--<script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>-->
    <script src="<?=admin_public_url('scripts/admin.js')?>"></script>
</head>
<body>
<?php if(session('admin_login')):?>
<!--navbar-->
<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
                    <?=setting('title')?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?=admin_url('logout')?>">
                Log Out
            </a>
        </li>
    </ul>
</div>

<!--sidebar-->
<div class="sidebar">

    <ul>
        <?php foreach ($menus as $mainUrl=>$menu): ?>
            <li class="<?=(route(1)== $mainUrl) || (isset($menu['submenu'][route(1)])) ? 'active':null ?>">
                <a href="<?=$mainUrl?>">
                    <span class="fa fa-<?=$menu['icon']?>"></span>
                    <span class="title">
                        <?=$menu['title']?>
                    </span>
                </a>
                <?php if (isset($menu['submenu'])):?>
                    <ul class="sub-menu">
                    <?php foreach ($menu['submenu'] as $url => $title):?>
                        <li>
                            <a href="<?=admin_url($url)?>">
                                <?=$title?>
                            </a>
                        </li>
                    <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </li>
        <?php endforeach;?>
        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>

</div>

<!--content-->
<div class="content">
    <?php if (error()): ?>
        <div class="message error box-">
            <?=error()?>
        </div>
    <?php endif;?>
    <?php if (success()): ?>
        <div class="message success box-">
            <?=success()?>
        </div>
    <?php endif;?>
<?php endif;?>