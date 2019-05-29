<?php require admin_view('static/header');?>

<!--login screen-->
<div class="login-screen">

    <!--login logo-->
    <div class="login-logo">
        <a href="<?=site_url()?>">
            <h2 style="font-size: 25px"> <?=setting('title_text')?> </h2>
        </a>
    </div>
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
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="admin_username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="admin_password">
            </li>
            <li>
                <button name="submit" value="1" type="submit">Login</button>
            </li>
        </ul>
    </form>


</div>

<?php require admin_view('static/footer');?>