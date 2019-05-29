<!doctype html>
<title>Containtment Maintenance Mode</title>
<link rel="icon" href="<?=public_url('assets/mini_logo.jpg')?>" type="image/x-icon" />
<style>
    body { text-align: center; padding: 150px; }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }
    #banner{
        margin-top: 30%;
        margin-left: 45%;
    }
</style>

<article>
    <h1><?=setting('maintenance_title')?></h1>

    <div>
        <?=setting('maintenance_text')?><br><br>
        - <?=setting('title_text')?>
    </div>
    <div id="banner">
        <img src="<?=public_url('assets/mini_logo.jpg')?>" alt="">
    </div>
</article>